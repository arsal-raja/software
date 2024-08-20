@extends('layouts.master')
@section('body')
    main
@endsection
@section('main-content')

 @include('includes.mobile-nav')
 <div class="flex">

            <!-- BEGIN: Side Menu -->
       @include('includes.side-nav')
            
         <div class="content">
            <!-- BEGIN: Top Bar -->
             @include('includes.top-bar')
            <!-- END: Top Bar -->
            <div class="grid">
               <div class="intro-y flex items-center mt-12">
                  <h2 class="text-lg font-medium mr-auto">
                    View Customer Form
                  </h2>
               </div>
               <div class="grid grid-cols-12 gap-6 mt-5">
                  <div class="intro-y col-span-12 lg:col-span-12">
                     <!-- BEGIN: Input -->
                     <div class="intro-y box">
                        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                           <h2 class="font-medium text-base mr-auto">
                              View Customer
                           </h2>
                           <!--                            <div class="form-check w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                              <label class="form-check-label ml-0 sm:ml-2" for="show-example-1">Show example code</label>
                              <input id="show-example-1" data-target="#input" class="show-code form-check-switch mr-0 ml-3" type="checkbox">
                              </div> -->
                        </div>
                        <div id="input" class="p-5">
                           <div class="preview">
                                  <table id="exampless" class="display nowrap" style="width:100%">
                                 <thead>
                                    <tr>
                                       <th>Name</th>
                                       <th>Buity Type</th>
                                      <th>NTN No</th>
                                       <th>Email Address</th>
                                       <th>Addresses</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                     @if(!empty($customerdata))
                                        @foreach($customerdata as $customer)
                                     
                                        <tr>   
                                              <td>{{$customer->name}}</td>
                                              <td>{{$customer->builtytype}}</td>
                                           <td>{{$customer->contact_point}}</td>
                                              <td>{{$customer->email}}</td>
                                              <td>{{$customer->Cus_Address}}</td>
                                            
                                        <td><a  href="edit-customer/{{$customer->id}}" > Edit </a>  |
                                        
                                        <a id="deletecustomer" onclick="return confirm('Are you sure you want to delete {{$customer->name}} ?')" href="delete-customer/{{$customer->id}}"> Delete </a> |
                                         <a href="view-customers-details/{{$customer->id}}"> View </a> 
                                           </td>
                                        </tr>
                                        @endforeach
                                    @endif
                                
                                 </tbody>
                                 <tfoot>
                                    <tr>
                                        <th>Name</th>
                                       <th>Buity Type</th>
                                      <th>NTN No</th>
                                       <th>Email Address</th>
                                       <th>Addresses</th>
                                       <th>Action</th>
                                    </tr>
                                 </tfoot>
                              </table>
                           </div>
                        </div>
                     </div>
                     <!-- END: Input -->
                     <!-- BEGIN: Input Sizing -->
                  </div>
               </div>
            </div>
         </div>
           
        </div>
        
@endsection

	