@extends('layouts.master')
@section('body')
main
@endsection
@section('main-content')
@include('includes.mobile-nav')
<div class="flex">
   @include('includes.side-nav')
         

         <div class="content">

           <!-- BEGIN: Top Bar -->
        @include('includes.top-bar')
      <!-- END: Top Bar -->

            <div class="grid">

               <div class="intro-y flex items-center mt-12">

                  <h2 class="text-lg font-medium mr-auto">

                  View Daily Expense Report

                  </h2>

               </div>

               <div class="grid grid-cols-12 gap-6 mt-5">

                  <div class="intro-y col-span-12 lg:col-span-12">

                     <!-- BEGIN: Input -->

                     <div class="intro-y box">

                        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">


                        <form method="Post" action="{{route('get-expense-data')}}">
                           @csrf
                           <h2 class="font-medium text-base mr-auto">

                      View Expense Reports

                           </h2>

                           <!--                            <div class="form-check w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">

                              <label class="form-check-label ml-0 sm:ml-2" for="show-example-1">Show example code</label>

                              <input id="show-example-1" data-target="#input" class="show-code form-check-switch mr-0 ml-3" type="checkbox">

                              </div> -->

                        </div>
                        <div class="mt-2 grid grid-cols-12 gap-2 positon-relative ">
                             
                        
                              <div class="col-span-4 positon-relative">
                                 <label for="txtBox" class="form-label">From Date</label>
                     <input id="regular-form-2"  type="date" name="fromdate" class="form-control" placeholder="Enter Amount" >
                                 </div>
                                  <div class="col-span-4 positon-relative">
                                 <label for="txtBox" class="form-label">To Date</label>
                     <input id="regular-form-2"  type="date" name="todate" class="form-control" placeholder="Enter Amount" >
                                 </div>
                             <!--      <div class="col-span-4 positon-relative">
                                 <label for="txtBox" class="form-label">category</label>
                     <select id="regular-form-2" type="text" name="expcategory" class="form-control" placeholder="Enter Name">
                                    <option>select category</option>
                                    @foreach ($data as $value)
                                    <option value="{{$value->id}}">{{$value->expense_category}}</option>
                                    @endforeach
                                   </select>

                                 </div> -->

                        
                             
</div>
<!-- <button  class="btn btn-danger mt-5">Filter</button> -->
<button href="generate-daily-expense"  class="btn btn-danger mt-5">Generate</button>

</form>
                              </div> 
                              
<h2>View Expense</h2>
                        <div id="input" class="p-5">

                      
                           <table id="example" class="display nowrap" style="width:100%">

<thead>

   <tr>
   <th>S.No</th>
      <th>Expense Name</th>
      <th>Category</th>
      <th>Date</th>
      <th>Amount</th>
      <th>Action</th>
     

   </tr>

</thead>

<tbody>


<?php $serial = 0; ?>
@foreach($column as $row)
<?php
$value=DB::table('expense_category')->where('id',$row->exp_category)->first();

?>
<?php $serial += 1; ?>
   <tr>
   <td>{{$serial}}</td>
      <td>{{$row->Expense_Name}}</td>
        <td>{{$value->expense_category}}</td>
      <td>{{$row->Expense_Date}}</td>
      <td>{{$row->Expense_Amount}}</td>

      <td><a href="edit-daily-expense/{{$row->id}}" >Edit </a> |
         <a href="delete-daily-expense/{{$row->id}}" > Delete </a>|
         <a href="generate-daily-expense/{{$row->id}}" > Generate </a>
      </td>
   </tr>
@endforeach
</table>

 </div>
 </div>

 
                           </div>

                        </div>
                     

                     <!-- END: Input -->

                     <!-- BEGIN: Input Sizing -->

              

         <!-- END: Content -->

      </div>
@endsection
      <!-- BEGIN: Dark Mode Switcher-->

      <!-- BEGIN: JS Assets-->

     