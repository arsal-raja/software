<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BrokerController extends Controller
{
    //


      public function add_broker()
    {

        return view('broker.add');

    }

      public function add_broker_process(Request $request)
    {

// return $request->all();


        $broker_name = $request->broker_name;

        $broker_phone = $request->broker_phone;

        $city = $request->broker_city;

        $broker_limit = $request->broker_limit;

        $broker_bank = $request->broker_bank;

        $broker_cnic = $request->broker_cnic;


        // $broker_cnicPic = $request->broker_cnic->getClientOriginalName();

        // $location= $request->broker_cnic->move(public_path('setUpModule/broker/'),$broker_cnicPic);

        $broker_type = $request->broker_type;

        $veh_selection = $request->veh_selection;

        $broker_phone_2 = $request->broker_phone_2;

        $last_id = DB::table('broker')->insertGetId([

            'broker_type' => $broker_type,

            'broker_name' => $broker_name,

            'broker_phone' => $broker_phone,

            'broker_city' => $city,

            'broker_limit' => $broker_limit,

            'broker_bank' => $broker_bank,

            'broker_phone_2' => $broker_phone_2,

            // 'broker_cnic' => $location,


            'veh_selection' => $veh_selection


        ]);
        return redirect('view-broker');
}

    public function index(Request $request){
        $query = DB::table('broker')
        ->orderby('broker_id', 'desc');


        if ($request->has('broker_name')) {
            $query->where('broker_name', 'like', '%' . $request->input('broker_name') . '%');
        }



        if ($request->has('broker_phone')) {
            $query->where('broker_phone', 'like', '%' . $request->input('broker_phone') . '%');
        }



        if ($request->has('broker_city')) {
            $query->where('broker_city', 'like', '%' . $request->input('broker_city') . '%');
        }

        // Execute the query and get the results
        $brokerData = $query->get();
        return view('broker.view', compact('brokerData'));

    }

  public function view_broker()
    {

        $brokerData = DB::table('broker')
            ->orderby('broker_id', 'desc')

            ->get();

        return view('broker.view', compact('brokerData'));

    }

}
