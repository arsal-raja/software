<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;  
use PDF;
class TrackingController extends Controller
{
    public function view_tracking(){

        $truck=DB::table('vehicles')->get();
        $station=DB::table('now_station')->get();
       $data=DB::table('tracking')->where('is_delete',1)->get();
        $status=DB::table('status')->where('is_delete',1)->get();
        $challant=DB::table('challan')->get();
        return view('Tracking/add',compact('truck','station','data','status','challant'));
    }
    public function view_tracking_process(Request $request){
        
        
        $tackingdate = $request->tackingdate;
        $truckno = $request->truckno;
        $trackingstation = $request->trackingstation;
        $status = $request->status;
      
    
        $challanBilties = DB::table('challan')
        ->join('now_challanlist','now_challanlist.challanid','challan.id')
        ->where('challan.vehicle_id',$truckno)
        ->select('now_challanlist.trno')
        ->get();
      
        foreach($challanBilties as $bilties){
      
            DB::table('tracking')->insert([
                'Tracking_Date'     => $tackingdate,
                'bilty_ids'         => $bilties->trno,
                'Tracking_Truck_no' => $truckno,
                'status'            => $status,
                'Tracking_Station'  => $trackingstation,
            ]);
        }
        
        
         return redirect()->back()->with('message','success added');
    }
    
    
    public function bilty_tracking(){
        $station    = DB::table('now_station')->get();
        $status     = DB::table('status')->where('is_delete',1)->get();
        $data       = DB::table('tracking')->where('is_delete',1)->get();
      return view('Tracking/bilty_tracking',compact('station','status','data'));
    }
    
    function  bilty_tracking_process(Request $request){
    
       
        $tackingdate = $request->tackingdate;
        $bilties = $request->bilty_no;
        $trackingstation = $request->trackingstation;
        $status = $request->status;
      
         DB::table('tracking')->insert([
                'Tracking_Date'     => $tackingdate,
                'bilty_ids'         => $bilties,
                'status'            => $status,
                'Tracking_Station'  => $trackingstation,
            ]);
      
         return redirect()->back()->with('message','success added');
    }
    
    public function bilty_tracking_filter(Request $request){
       
        $track=DB::table('tracking')->join('now_station','tracking.Tracking_Station','now_station.id')->where('tracking.bilty_ids',$request->bilty_no)->get();
        $pdf = PDF::loadView('Tracking.bilty_tracking_report',compact('track'));
        $pdf->setPaper('A4', 'Landscape');
        return $pdf->stream('report.pdf');
        
    }

    public function edit_tracking($id){
      
        $query = DB::table('tracking')
         ->where('id',$id)
         ->first();
 
          $truck=DB::table('vehicles')->get();
          $station=DB::table('now_station')->get();
          $data=DB::table('tracking')->where('is_delete',1)->get();

        return view('Tracking/add',compact('truck','station','data','query'));
             
 
 
     }
 
 
 public function edit_tracking_process(Request $request){
     
     $id = $request->id;
     $tackingdate = $request->tackingdate;
     $truckno = $request->truckno;
     $trackingstation = $request->trackingstation;
 
       DB::table('tracking')
     ->where('id',$id)
     ->update([
 
        'Tracking_Date'=>$tackingdate,
        'Tracking_Truck_no'=>$truckno,
        'Tracking_Station'=>$trackingstation,
 
     ]);
 
     return redirect('add-tracking')->with('message','success edit');;
 }
 
 
 
 
 public function delete_tracking($id){
 
     $delete = DB::table('tracking')
     ->where('id',$id)
     ->update([
 
         'is_delete' => 0,
     ]);
 
    return redirect('add-tracking')->with('message','delete success');
 }
 
 public function stutus(Request $request)
 {
     $addstatus = DB::table('status')->where('is_delete',1)->get();
    //  dd($addstatus);
    return view('Tracking.status',compact('addstatus'));
 }


 public function save_status(Request $request)
 {
    $status = $request->status;
    $description = $request->description;
    
    DB::table('status')->Insert([
        'status' => $status,
        'description' => $description,
    ]);
    
    return redirect()->back();
    // return view('status.add');

 }

 public function editStatus(Request $req, $id)
 {
    $query = DB::table('status')->where('id',$id)->first();
    $addstatus = DB::table('status')->where('is_delete',1)->get();
    return view('Tracking.status',compact('query','addstatus'));
 }



 public function save_editstatus(request $req)
 {
       
        $insert = DB::table('status')
        ->where('id',$req->id)
        ->update([
            'description' => $req->description,
            'status'=>$req->status,
        ]);
        return redirect('status');
 }




     public function deletestatus($id)
     {
    
        $update1 = DB::table('status')
        ->where('id', $id)
        ->update([
            'is_delete' => 0,
        ]);
    
        return redirect('status');
    
     }
     
    public function track_by_challan(Request $req)
    {
        $track=DB::table('tracking')->join('now_station','tracking.Tracking_Station','now_station.id')->where('tracking.Tracking_Truck_no',$req->id)->get();
        $pdf = PDF::loadView('Tracking.tracking_report',compact('track'));
        $pdf->setPaper('A4', 'Landscape');
        return $pdf->stream('report.pdf');

    }
    
     public function save_roles(Request $request)
 {
     
     
    $roles = $request->roles;
  
    DB::table('roles')->Insert([
        'roles' => $roles,
        'status' => 1,
    ]);
    
    return redirect()->back();
    // return view('status.add');

 }


}
