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
                    View Broker Form
                  </h2>
               </div>
               <div class="grid grid-cols-12 gap-6 mt-5">
                  <div class="intro-y col-span-12 lg:col-span-12">
                     <!-- BEGIN: Input -->
                     <div class="intro-y box">
                        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                           <h2 class="font-medium text-base mr-auto">
                              View Broker
                           </h2>
                           <!--                            <div class="form-check w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                              <label class="form-check-label ml-0 sm:ml-2" for="show-example-1">Show example code</label>
                              <input id="show-example-1" data-target="#input" class="show-code form-check-switch mr-0 ml-3" type="checkbox">
                              </div> -->
                        </div>
                        <div id="input" class="p-5">
                           <div class="preview">
                            <form method="GET" action="{{ route('broker.index') }}">
                                <div class="flex flex-wrap gap-4 mb-4">
                                    <input type="text" name="broker_name" placeholder="Name" value="{{ request('broker_name') }}" class="form-control">
                                    <input type="text" name="broker_phone" placeholder="Search Phone" value="{{ request('broker_phone') }}" class="form-control">
                                    <input type="text" name="broker_city" placeholder="City" value="{{ request('broker_city') }}" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Search</button>
                            </form>
                                  <table id="exampless" class="display nowrap" style="width:100%">
                                 <thead>
                                    <tr>
                                       <th>Broker Name</th>
                                       <th>Broker Type</th>
                                      <th>Broker Phone</th>
                                      <th>Broker Phone 2</th>
                                       <th>Broker City</th>
                                       <th>Broker Bank</th>
                                       <th>Broker CNIC</th>
                                       <th>Broker Limit</th>
                                       <th>Vehicle Selection</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                     {{-- @if(!empty($data)) --}}
                                        @foreach($brokerData as $customer)
                                        <tr>
                                              <td>{{$customer->broker_name}}</td>
                                              <td>{{$customer->broker_type}}</td>
                                             <td>{{$customer->broker_phone}}</td>
                                             <td>{{$customer->broker_phone_2}}</td>
                                              <td>{{$customer->broker_city}}</td>
                                              <td>{{$customer->broker_bank}}</td>
                                              <td>{{ asset($customer->broker_cnic)}}</td>
                                              <td>{{$customer->broker_limit}}</td>
                                              {{-- <td>{{$customer->broker_veh_selection}}</td> --}}

                                        <td>
                                            {{-- <a  href="edit-customer/{{$customer->broker_id}}" > Edit </a>
                                              | --}}

                                        <a id="deletecustomer" onclick="return confirm('Are you sure you want to delete {{$customer->broker_name}} ?')" href="delete-customer/{{$customer->broker_id}}"> Delete </a> |
                                         <a href="view-customers-details/{{$customer->broker_id}}"> View </a>
                                           </td>
                                        </tr>
                                        @endforeach
                                    {{-- @endif --}}

                                 </tbody>

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

