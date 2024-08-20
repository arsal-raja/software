<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use mpdf\mpdf;
use PDF;
use Auth;
use Yajra\DataTables\DataTables;

class billController extends Controller
{
    public function add_bills()
    {

        $number = null;
        $data['sender'] = DB::table('customer')->where('selfcompany', session('company')[0]->id)
            //->where('is_delete',1)
            ->where('builtytype', 'billed')
            ->where('assigned', 0)->get();

        $getBillNumber = DB::table('bill')->orderBy('bill_id', 'desc')->offset(0)->limit(1)->get();

        if (isset($getBillNumber[0]->bill_Number)) {
            $bn = $getBillNumber[0]->bill_Number;
        } else {
            $bn = 0;
        }

        //if(isset($bn) && sizeof($bn)){  //not working on localhost

        $number = $bn;
        $number++;
        $number = str_pad($number, 3, "0", STR_PAD_LEFT);

        $data['billNum'] = $number;

        return view('bills.add', $data);
    }

    public function paid_builty()
    {
        dd('here');
    }


    public function generate_bill(Request $req)
    {

        $totalOfLabour = null;
        $dateTo = $req->input('to');
        $dateFrom = $req->input('from');
        $customer = $req->input('customer');

        $labourCharge = $req->input('labourCharge');
        $fuelCharge = $req->input('fuelCharge');
        $tax = $req->input('tax');
        $taxname = $req->input('taxname');
        $taxpercentage = $req->input('taxpercentage');


        $from_date = date('Y-m-d', strtotime($dateFrom));
        $to_date = date('Y-m-d', strtotime($dateTo));
        $desType = $req->input('desType');
        $type = $req->input('type');

        $weigh = $req->input('weight');
        $labour = $req->input('labour');
        $fuel = $req->input('fuel');
        $number = $req->input('bill_number');

        if (isset($number) && $number > 0) {
            $record_avalaible = DB::table('bill')
                ->where('desType', $req->desType)
                //   ->where('bill_type',$type)
                ->where('bill_Number', $number)
                ->where('bill_customer', $customer)
                ->get();

            if (isset($record_avalaible) && sizeof($record_avalaible) > 0) {

                return redirect('add-bills')->with('error', "Bill Number Already Assign This Customer, Please Change Bill Number.");
            }
        }

        $data['lbr'] = $req->input('labour');
        $data['fuel'] = $req->input('fuel');
        $data['ctn_weight'] = $req->input('weight');
        $data['tax'] = $req->input('tax');

        $data['data_bill'] = DB::table('now_builty')
            ->join('now_station', 'now_builty.to', 'now_station.id')
            ->join('now_builtyitems', 'now_builty.id', 'now_builtyitems.builtyid')
            ->WhereBetween('now_builty.date', [$from_date, $to_date])
            ->where('now_station.station_type_name', '=', $desType)
            ->where('now_builty.customer', $customer)->get();


        $taxper = $taxpercentage;



        $net_amount = 0;
        $taxamountss = 0;

        foreach ($data['data_bill'] as $dbill) {
            $taxamountss += (int) $dbill->total;
        }



        if ($labourCharge != '') {
            $lc = $req->input('labourCharge');
        } else {
            $lc = '';
        }
        if ($fuelCharge != '') {
            $fc = $req->input('fuelCharge');
        } else {
            $fc = 0;
        }



        $billRecords = array(
            "selfcompany" => session('company')[0]->id,
            "bill_Number" => $number,
            "bill_customer" => $customer,
            "bill_date" => $from_date,
            "end_date" => $to_date,
            "total" => $taxamountss,
            "r_total" => $taxamountss,
            "tax_name" => $taxname,
            "tax_percentage" => $taxper,
            "labour" => $lc,
            "fuelCharge" => $fc,
            "weight" => $req->input('weight'),
            "tax" => $req->input('tax'),
            "desType" => $desType,
            "generatedby" => $req->generatedby
        );


        $createBillRecord = DB::table('bill')->insertGetId($billRecords);

        $customer = DB::table('customer')->where('id', $customer)->get();

        $ledgerRecord = array(
            "ledger_reference" => $number,
            "ledger_desc" => $customer[0]->name,
            "ledger_date" => $from_date,
            "ledger_credit" => $net_amount,
            "bill" => 1,
            "bill_id" => $createBillRecord
        );

        $ledger = DB::table('ledger')->insert($ledgerRecord);

        $customerLedgerRecord = array(
            "cl_reference" => $number,
            "cl_desc" => $customer[0]->name,
            "cl_date" => $from_date,
            "cl_credit" => $net_amount,
            "bill" => 1,
            "FKCustomerID" => $customer[0]->id,
            "bill_id" => $createBillRecord
        );

        $ledger = DB::table('customer_ledger')->insert($customerLedgerRecord);

        return redirect('view-bills');

    }

    public function generateBillById($id)
    {
        $data = DB::table('bill')
            ->join('now_rateslist', 'bill.bill_customer', '=', 'now_rateslist.customerid')
            ->where('bill.bill_id', $id)
            ->first();

        $bilty = DB::table('now_builty')
            ->join('now_station', 'now_builty.to', 'now_station.id')
            ->whereBetween('now_builty.date', [$data->bill_date, $data->end_date])
            ->where('now_station.station_type_name', '=', $data->desType)
            ->where('now_builty.customer', $data->bill_customer)
            ->where('now_builty.Builtytype', 'Paid')
            ->select('now_builty.id as id', 'now_builty.*', 'now_station.station_type_name')
            ->orderBy('now_builty.date', 'asc')
            ->get();

        $customer = DB::table('customer')
            ->where('id', $data->bill_customer)
            ->select('contact_point', 'billformat', 'name as customerName', 'id as customeNo')
            ->first();

        $billtype = $customer->billformat;

        $pdf = PDF::loadView('bills' . '/' . $billtype, compact('data', 'bilty', 'customer'))->setPaper('a4', 'landscape')->save('agp.pdf');
        return $pdf->stream($billtype . '.pdf');
    }

    public function deleteGeneratedBillFile(Request $request)
    {
        $fileUrl = $request->input('file_url');

        // Extract the file name from the URL
        $fileName = basename($fileUrl);

        // Specify the directory where the file is located
        $filePath = public_path('files/' . $fileName);


        // Check if the file exists before attempting to delete it
        if (File::exists($filePath)) {
            // Attempt to delete the file
            if (File::delete($filePath)) {
                return response()->json(['message' => 'File deleted successfully']);
            } else {
                return response()->json(['error' => $filePath]);
            }
        } else {
            return response()->json(['error' => 'File not found']);
        }
    }


    //ENd

    public function getBills()
    {
        global $row_count;
        $row_count = 1;


        $customer_id = auth()->user()->user_id;
        $bills = DB::table('bill')
            ->select(
                'bill.bill_id',
                'bill.bill_Number',
                'bill.bill_date',
                'bill.total',
                'bill.desType',
                'bill.tax_percentage',
                'bill.bill_date',
                'bill.end_date',
                'bill.bill_customer',
                'customer.name'
            )
            ->join('customer', 'bill.bill_customer', 'customer.id')->join('ledger', 'bill.bill_id', 'ledger.bill_id');


        if (Auth::user()->role_id == 1) {
            $bills->where('bill.bill_customer', Auth::user()->user_id)->where('bill.type', 0);
        } else if (Auth::user()->role_id == 2) {
            $bills->where('bill.bill_customer', Auth::user()->user_id)->where('bill.type', 0);
        } else {
            $bills->where('bill.selfcompany', session('company')[0]->id)->where('bill.type', 0);
        }

        return DataTables::of($bills)
            ->filter(function ($query) {
                $value = \request()->get('search')['value'];

                if (!is_null($value) && !empty($value)) {
                    $query->where(function ($query) use ($value) {
                        $query->where('bill.bill_Number', 'LIKE', '%' . $value . '%');
                        $query->orWhere('bill.bill_date', 'LIKE', '%' . $value . '%');
                        $query->orWhere('bill.desType', 'LIKE', '%' . $value . '%');
                        $query->orWhere('customer.name', 'LIKE', '%' . $value . '%');
                    });
                }
            })
            ->editColumn('bill_Number', function ($bill) {
                $cust = explode(' ', $bill->name);
                $result = '';
                $bill_no = date('ym', strtotime($bill->bill_date));
                $bill_no .= '/';
                foreach ($cust as $name) {
                    $result .= substr($name, 0, 1);
                }
                $wrd = substr($result, 0, 2);
                $wrd = str_replace('(', "", $wrd);
                $wrd = str_replace('&', "", $wrd);
                $bill_no .= $wrd;

                return $bill_no;
            })
            ->editColumn('total', function ($bill) {
                $taxamountss = DB::table('now_builty')
                    ->selectRaw('SUM(now_builtyitems.rate * now_builtyitems.quantity) as total')
                    ->join('now_station', 'now_builty.to', 'now_station.id')
                    ->join('now_builtyitems', 'now_builty.id', 'now_builtyitems.builtyid')
                    ->WhereBetween('now_builty.date', [$bill->bill_date, $bill->end_date])
                    ->where('now_station.station_type_name', '=', $bill->desType)
                    ->where('now_builty.customer', $bill->bill_customer)
                    ->get();


                // $taxamountsss = DB::table('now_builty')
                //     ->select('now_builtyitems.total')
                //     ->join('now_station','now_builty.to','now_station.id')
                //     ->join('now_builtyitems','now_builty.id','now_builtyitems.builtyid')
                //     ->WhereBetween('now_builty.date',[$bill->bill_date,$bill->end_date])
                //     ->where('now_station.station_type_name','=',$bill->desType)
                //     ->where('now_builty.customer',$bill->bill_customer)
                //     ->sum('');    
    
                $totalperce = $taxamountss[0]->total * ($bill->tax_percentage / 100);
                $rp = ($taxamountss[0]->total) + $totalperce;
                return $rp;
            })
            ->addColumn('sno', function ($bill) {
                global $row_count;
                return $row_count++;
            })
            ->addColumn('action', function ($bill) {
                $actions = '<a  href="javascript:void(0)" onclick="view_update(' . $bill->bill_id . ')">';
                $actions .= '<i class="fa fa-eye"></i></a>';

                if (Auth::user()->role_id != 2) {

                    if (true) {
                        $actions .= ' | <a onclick="if(confirm(\'Are you sure you want to delete this item?\')) { location.href=\'removeBillRecord/' . $bill->bill_id . '\'; }" href="#"> <i class="fa fa-times"></i></a>';

                    } else {
                        $actions .= '<a href="javascript:void(0)" data-toggle="tooltip" title="You don\'t have enough permision for this action.">
                            <i class="fa fa-times"></i>
                        </a>';
                    }
                }

                return $actions;
            })->make();
    }

    public function view_bills()
    {

        if (Auth::user()->role_id == 1) {
            $data['sender'] = DB::table('customer')->where('id', Auth::user()->user_id)->get();
            $data['bill'] = DB::table('bill')->where('bill_customer', Auth::user()->user_id)->where('type', 0)->get();
        } else {

            $data['sender'] = DB::table('customer')->where('selfcompany', session('company')[0]->id)->get();
            $data['bill'] = DB::table('bill')->where('selfcompany', session('company')[0]->id)->where('type', 0)->get();
        }



        return view('bills.view', $data);
    }

    public function removeBillRecord($id)
    {

        $check_record = DB::table('bill')->where('bill_id', $id)->get();
        $bill_number = $check_record[0]->bill_Number;
        $bill_date = $check_record[0]->bill_date;

        $bill_date = date('F', strtotime($bill_date));

        $remove_ledger_record = DB::table('ledger')->where('ledger_reference', $bill_number)->where('bill', 1)->delete();
        $remove_customer_ledger_record = DB::table('customer_ledger')->where('cl_reference', $bill_number)->where('bill', 1)->delete();
        $remove_bill_record = DB::table('bill')->where('bill_id', $id)->delete();

        return redirect('view-bills')->with('error', "Bill of month " . $bill_date . " has been removed");
    }


    public function monthly_billing()
    {
        return view('bills/monthly_report');

    }


    public function monthly_billing_report(Request $request)
    {
        $month = $request->month;
        $bills = DB::table('bill')
            ->join('customer', 'bill.bill_customer', 'customer.id')
            ->where('bill_date', 'like', $month . '%')
            //->where('bill.type',0)
            ->get();
        $pdf = PDF::loadView('bills/monthlybilling', compact('bills', 'month'))->setPaper('a4', 'landscape')->save('Monthly Billing.pdf');
        return $pdf->stream('Monthly Billing.pdf');

    }

    public function add_monthly_bill()
    {

        $months = DB::table('bill')
            ->join('customer', 'bill.bill_customer', 'customer.id')
            ->where('bill.type', 1)
            ->where('bill.is_delete', 1)
            ->get();
        $sender = DB::table('customer')->get();

        return view('bills/add-monthly-bill', compact('sender', 'months'));
    }
    public function add_monthly_billing_process(Request $req)
    {

        //dd($req->all());
        $billno = $req->input('bill_no');
        $customer = $req->input('customer');
        $desType = $req->input('desType');
        $month = $req->input('month');
        $amount = $req->input('amount');

        $result = DB::table('bill')->insert([

            'bill_Number' => $billno,
            'bill_customer' => $customer,
            'desType' => $desType,
            'bill_date' => $month,
            'total' => $amount,
            'type' => 1,
        ]);
        return redirect('add-monthly-bill');

    }
    public function delete_monthly_bill($id)
    {

        $result = DB::table('bill')
            ->where('bill_id', $id)
            ->update([
                'is_delete' => 0
            ]);
        return redirect('add-monthly-bill');

    }

    public function out_standing_bill()
    {

        $customers = DB::table('customer')->get();
        return view('bills/outstanding_bill', compact('customers'));
    }


    public function outstanding_bill_report(Request $req)
    {

        $bills = [];
        $customer = $req->customer_id;

        if ($customer == 'all') {
            $Allbills = DB::table('bill')->join('customer', 'bill.bill_customer', 'customer.id')->get();
            foreach ($Allbills as $Allbill) {
                $bills[$Allbill->bill_customer . '_' . $Allbill->name][] = $Allbill->total;
            }

        } else {
            $bills = DB::table('bill')->join('customer', 'bill.bill_customer', 'customer.id')->where('bill.bill_customer', $customer)
                ->where('bill.r_total', '!=', 0)
                ->get();

        }
        $pdf = PDF::loadView('bills/generate_outstanding_billl', compact('bills', 'customer'))->setPaper('a4', 'landscape')->save('Outstanding Billing.pdf');

        return $pdf->stream('Outstanding.pdf');
    }
}
