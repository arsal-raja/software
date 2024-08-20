<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use DB;

use App\User;

use App\VehicleType;
use Illuminate\Support\Facades\Hash;

class customerController extends Controller
{







    public function chartviews()
    {



        $Advance['totalorders'] = DB::table('now_builty')->where('Builtytype', 'Advance')->sum('bilty_total');

        $Advance['orderamount'] = DB::table('now_builty')->where('Builtytype', 'Advance')->count();

        $Advance['orderstatus'] = "Advance";



        $ToPay['totalorders'] = DB::table('now_builty')->where('Builtytype', 'To Pay')->sum('bilty_total');

        $ToPay['orderamount'] = DB::table('now_builty')->where('Builtytype', 'To Pay')->count();

        $ToPay['orderstatus'] = "To Pay";



        $Paid['totalorders'] = DB::table('now_builty')->where('Builtytype', 'Paid')->sum('bilty_total');

        $Paid['orderamount'] = DB::table('now_builty')->where('Builtytype', 'Paid')->count();

        $Paid['orderstatus'] = "Paid";



        $array = array($Advance, $ToPay, $Paid);

        return Response()->json($array);



    }





    public function add_labels()
    {



        $Selectpackages = DB::table('now_packages')->where('lcl', 0)->get();

        $selectcustomer = DB::table('customer')->get();

        $labels = DB::table('customerlabels')

            ->select('customer.name as Cname', 'customerlabels.Name as ClName')

            ->join('customer', 'customerlabels.CustomerID', 'customer.id')->where('is_delete', 1)->get();

        return view('customer.labels', compact('selectcustomer', 'labels', 'Selectpackages'));

    }



    public function save_labels(Request $req)
    {

        $customerID = $req->CustomerID;

        $labels = $req->phones;



        for ($i = 0; $i < count($labels); $i++) {



            $selectPName = DB::table('now_packages')->where('id', $labels[$i])->first();



            DB::table('customerlabels')->insert([

                'PackageID' => $labels[$i],

                'Name' => $selectPName->packagename,

                'CustomerID' => $customerID,

            ]);

        }

        return redirect('Add-labels');



    }







    public function add_customer()
    {

        return view('customer.add');

    }



    //updated by Murad



    public function view_customers_details($id)
    {



        $customer = DB::table('customer')

            ->where('id', $id)

            ->first();



        $Phone = DB::table('now_phone')

            ->where('customerid', $id)

            ->where('type', 'customers')

            ->get();





        $Address = DB::table('now_address')

            ->where('customerid', $id)

            ->where('type', 'customers')

            ->get();





        $Email = DB::table('now_email')

            ->select('email')

            ->where('customerid', $id)

            ->get();



        return view('customer.view-details', compact('customer', 'Phone', 'Address', 'Email'));



    }







    //ENd







    public function add_customer_process(Request $request)
    {







        $builtytype = $request->customerTtype;

        $customer_id = $request->customer_id;

        $name = $request->name_eng;

        $nameinurdu = $request->name_urdu;

        $contact_point = $request->contact_point;

        $srb_prb_pra = $request->srb_prb_pra;


        $account_limit = $request->account_limit;

        // $rate_list_station = $request->rate_list_station;

        $noofprints = $request->noofprints;

        $email = $request->emails;

        $email2 = $request->emails2;


        $OfficeAddress = $request->OfficeAddress;

        $phones = count($request->phones);

        $address = count($request->address);


        $last_id = DB::table('customer')->insertGetId([

            'selfcompany' => session('company')[0]->id,

            'builtytype' => $builtytype,

            'name' => $name,

            'nameinurdu' => $nameinurdu,

            'noofprints' => $noofprints,

            'srb_prb_pra' => $srb_prb_pra,

            'account_limit' => $account_limit,

            // 'rate_list_station' => $rate_list_station,

            'customer_id' => $customer_id,

            'contact_point' => $contact_point,

            'email' => $email,

            'email2' => $email2,

            'created_at' => Date('Y-m-d'),

            'Cus_Address' => $OfficeAddress

        ]);



        if (!empty($phones)) {

            for ($j = 0; $j < $phones; $j++) {

                DB::table('now_phone')->insert(['phone' => $request->phones[$j], 'customerid' => $last_id, 'type' => 'customers']);

            }

        }



        if (!empty($address)) {

            for ($j = 0; $j < $address; $j++) {

                DB::table('now_address')->insert(['address' => $request->address[$j], 'customerid' => $last_id, 'type' => 'customers']);

            }

        }



        return redirect('view-customer');



    }



    public function customer_profile()
    {



        $customers = DB::table('customer')->where('selfcompany', session('company')[0]->id)->where('is_delete', 1)->where('assigned', 1)->get();

        $packeges = DB::table('now_packages')->where('is_delete', 1)->get();

        $fcl_packeges = DB::table('now_packages')->where('lcl', 1)->get();

        $stations = DB::table('now_station')->where('is_delete', 1)->get();



        return view('customer.customer_profile', compact('customers', 'packeges', 'stations', 'fcl_packeges'));

    }



    public function view_customer()
    {

        $data['customerdata'] = DB::table('customer')

            ->where('selfcompany', session('company')[0]->id)

            ->where('is_delete', 1)

            ->orderby('id', 'desc')

            ->get();

        return view('customer.view', $data);

    }



    public function editCustomer($id)
    {

        if ($id > 0) {



            $data['editCustomer'] = DB::table('customer')->where('id', $id)->get();

            $data['station_type'] = DB::table('station_type')->get();

            return view('customer.add', $data);

        }

    }



    public function self_company()
    {

        return view('selfcompany.add');

    }









    public function del_customer($id)
    {



        $UpdateCustomerDetails = DB::table('customer')

            ->where('id', $id)

            ->update([

                'is_delete' => 0,



            ]);



        return redirect('view-customer');

    }



    public function save_edit_customer(Request $request)
    {



        //dd($request->all());

        $builty_type = $request->customerTtype;

        $contact = $request->input('phones');

        $warehouse = $request->input('address');

        $id = $request->input('customer_id');

        $cusit = $request->input('cusID');

        $name_eng = $request->input('name_eng');

        $name_urdu = $request->input('name_urdu');

        $contact_point = $request->input('contact_point');

        $emails = $request->input('emails');

        $emails2 = $request->input('emails2');

        $noofprints = $request->input('noofprints');

        $OfficeAddress = $request->input('OfficeAddress');

        $builtytype = $request->input('builtytype');



        $UpdateCustomerDetails = DB::table('customer')

            ->where('id', $cusit)

            ->update([



                'builtytype' => $builty_type,

                'name' => $name_eng,

                'nameinurdu' => $name_urdu,

                'noofprints' => $noofprints,

                'contact_point' => $contact_point,

                'Cus_Address' => $OfficeAddress,

                'email' => $emails,
                'email2' => $emails2

            ]);

        if (!empty($contact)) {

            for ($i = 0; $i <= count($contact); $i++) {



                $customerphone = DB::table('now_phone')

                    ->where('customerid', $cusit)

                    ->where('type', 'customers')

                    ->get();





                foreach ($customerphone as $key => $row) {



                    $rowid = $row->id;





                    $update = DB::table('now_phone')

                        ->where('customerid', $cusit)

                        ->where('id', $rowid)

                        ->where('type', 'customers')

                        ->update([

                            'phone' => $contact[$key]

                        ]);



                }

            }

        }



        if (!empty($warehouse)) {

            for ($i = 0; $i <= count($warehouse); $i++) {



                $customerphone = DB::table('now_address')

                    ->where('customerid', $cusit)

                    ->where('type', 'customers')

                    ->get();





                foreach ($customerphone as $key => $row) {



                    $rowid = $row->id;





                    $update = DB::table('now_address')

                        ->where('customerid', $cusit)

                        ->where('id', $rowid)

                        ->where('type', 'customers')

                        ->update([

                            'address' => $warehouse[$key]

                        ]);



                }

            }



        }

        return redirect('view-customer');









    }







    public function edit_customer($id)
    {

        $select = DB::table('customer')

            ->where('customer.id', $id)

            ->first();



        $customerAddress = DB::table('now_phone')



            ->where('type', 'customers')

            ->where('customerid', $id)

            ->get();

        $customerOAddress = DB::table('now_address')

            ->where('type', 'customers')

            ->where('customerid', $id)

            ->get();





        return view('customer.add', compact('select', 'customerAddress', 'customerOAddress'));





    }

    public function edit_rate()
    {



        $rates = DB::table('rate_list_history')->join('customer', 'customer.id', 'rate_list_history.customer_id')->get();

        $customers = DB::table('now_rateslist')->join('customer', 'now_rateslist.customerid', 'customer.id')->where('now_rateslist.customer_profile', 'Billed')->where('customer.selfcompany', session('company')[0]->id)->select('customer.name', 'customer.id')->distinct()->get();

        $stations = DB::table('now_station')->where('is_delete', 1)->get();

        $packages = DB::table('now_packages')->where('is_delete', 1)->get();

        return view('customer.edit-rate', compact('customers', 'stations', 'rates', 'packages'));

    }



    public function save_edit_rate(Request $request)
    {

        // dd($request->all());

        $data = 0;

        $total = 0;

        $result = NULL;

        $sum = 0;

        $ids = [];

        $customer = $request->customer;

        $package = $request->package;

        $datefrom = $request->datefrom;

        $dateto = $request->dateto;

        $fromstation = $request->fromstation;

        $tostation = $request->tostation;

        $rate = $request->rate;







        $last_id = DB::table('rate_list_history')->insertGetId([

            'customer_id' => $customer,

            'from_date' => $datefrom,

            'to_date' => $dateto,

            'from_station' => $fromstation,

            'to_station' => $tostation,

            'rate_id' => $rate,

        ]);





        $builties = DB::table('now_builty')

            ->where('customer', $customer)

            ->where('to', $tostation)

            ->whereBetween('now_builty.date', [$datefrom, $dateto])

            ->get();





        foreach ($builties as $builty) {

            $ids[] = $builty->id;

            //     $total =  $rate * $builty->quantity;

            // $items  = DB::table('now_builtyitems')->where('builtyid',$builty->id)->update(['rate'=>$rate,]);

        }

        $datas = DB::table('now_builtyitems')->where('package_id', $package)->whereIn('builtyid', $ids)->get();



        if (!empty($datas)) {

            foreach ($datas as $data) {

                $sum += $rate * $data->quantity;

                $total = $rate * $data->quantity;

                $result = DB::table('now_builtyitems')->where('itemid', $data->itemid)->update(['rate' => $rate, 'total' => $total]);



                if (!empty($result)) {

                    DB::table('now_builty')->where('id', $data->builtyid)->update(['bilty_total' => $sum]);

                }

            }

        }



        return redirect('edit-rate');

    }



    public function delete_rete_history($id)
    {

        dd($id);

    }



    public function add_roles(Request $request)
    {



        return view('userRights/add_role');

    }



    public function view_roles(Request $request)
    {

        $roles = DB::table('roles')->get();

        return view('userRights/view_roles', compact('roles'));

    }



    public function assign_roles()
    {

        $roles = DB::table('roles')->get();

        $customers = DB::table('customer')->get();

        return view('userRights/assign_roles', compact('roles', 'customers'));



    }



    public function assign_role_process(Request $request)
    {



        $customers = DB::table('customer')->where('id', $request->customer_id)->first();



        return User::create([

            'role_id' => $request->role_id,

            'name' => $customers->name,

            'user_id' => $request->customer_id,

            'email' => $request->email,

            'password' => Hash::make($request->password),

        ]);



        return redirect()->back();



    }

    public function manage_customer_rights()
    {
        return view('customer/manage_customer_rights');
    }



    public function fetch_unlinked_customers()
    {
        // Fetch all customers
        $customers = DB::table('customer')->get();

        // Fetch all user_ids
        $userIds = DB::table('users')->where('role_id', '2')->pluck('user_id')->toArray();

        // Initialize an array to hold unlinked customers
        $unlinkedCustomers = [];

        // Iterate through each customer
        foreach ($customers as $customer) {
            // Check if the customer's id is not in the user_ids array
            if (!in_array($customer->id, $userIds)) {
                // If not, add the customer to the unlinked customers array
                $unlinkedCustomers[] = $customer;
            }
        }

        return response()->json(['customers' => $unlinkedCustomers]);
    }


    public function fetch_customer_rights()
    {
        $customer_rights = DB::table('customer')
            ->join('users', 'customer.id', '=', 'users.user_id')
            ->where('users.role_id', '2')
            ->select('customer.id as customer_id', 'customer.name', 'users.email', 'users.id as customer_right_id', 'users.password', 'users.uncrypted_password')
            ->get();

        return response()->json(['customer_rights' => $customer_rights]);
    }

    public function save_customer_right(Request $request)
    {
        $id = $request->input('id');
        $user_id = $request->input('user_id');
        $name = $request->input('name');
        $email = $request->input('email');
        $password = bcrypt($request->input('password'));
        $uncrypted_password = $request->input('password');
        $role_id = '2';

        if (!is_null($id)) {
            // Update existing customer right
            $updated = DB::update('UPDATE users SET role_id = ?, user_id = ?, name = ?, email = ?, password = ?, uncrypted_password = ? WHERE id = ? AND role_id=?', [$role_id, $user_id, $name, $email, $password, $uncrypted_password, $id,2]);
            if ($updated) {
                return response()->json(['success' => true, 'message' => 'Customer right updated successfully']);
            } else {
                return response()->json(['success' => false, 'message' => 'Failed to update customer right']);
            }
        } else {
            // Add new customer right
            $inserted = DB::insert('INSERT INTO users (role_id,user_id,name, email, password, uncrypted_password) VALUES (?, ?, ?, ?, ?, ?)', [$role_id, $user_id, $name, $email, $password, $uncrypted_password]);
            if ($inserted) {
                return response()->json(['success' => true, 'message' => 'Customer right added successfully']);
            } else {
                return response()->json(['success' => false, 'message' => 'Failed to add customer right']);
            }
        }
    }

    public function delete_customer_rights(Request $request)
    {
        $customer_right_id = $request->input('customer_right_id');
            // Update existing customer right
            $deleted = DB::table('users')->where('id', $customer_right_id)->delete();
            if ($deleted) {
                return response()->json(['success' => true, 'message' => 'Customer right deleted successfully']);
            } else {
                return response()->json(['success' => false, 'message' => 'Failed to delete customer right']);
            }


    }

    public function check_customer_right_email(Request $request)
    {
        $user_id = $request->input('user_id');
        $email = $request->input('email');
        $query = DB::table('users')->where('email', $email);

        if ($user_id) {
            $query->where('id', '!=', $user_id);
        }

        $exists = $query->exists();

        return response()->json(['exists' => $exists]);
    }


     // Show the list of vehicle types
     public function showvehicleType()
     {
         $vehicleTypes = VehicleType::all(); // Assuming you have a VehicleType model
         return view('vehicleType.view', compact('vehicleTypes')); // Assuming your view is located at resources/views/vehicleType/index.blade.php
     }


     public function addvehicleType(){
        return view('vehicleType.add');
     }

     // Store a new vehicle type
     public function vehicleType(Request $request)
     {
        // return $request->all();
        //  $request->validate([
        //      'name' => 'required|string|max:255',
        //  ]);

         VehicleType::create([
             'name' => $request->input('name'),
         ]);

         return redirect()->route('vehicleType')->with('success', 'Vehicle type added successfully.');
     }

     // Edit an existing vehicle type
     public function vehicleTypeEdit($id)
     {
         $vehicleType = VehicleType::findOrFail($id);
         return view('vehicleType.add', compact('vehicleType')); // Assuming your view is located at resources/views/vehicleType/edit.blade.php
     }

}

