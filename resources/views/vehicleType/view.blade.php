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
                  </h2>
               </div>
               <div class="grid grid-cols-12 gap-6 mt-5">
                  <div class="intro-y col-span-12 lg:col-span-12">
                     <!-- BEGIN: Input -->
                     <div class="intro-y box">
                        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                           <h2 class="font-medium text-base mr-auto">
                              View Vehicle Type
                           </h2>

                        </div>
                        <div id="input" class="p-5">
                           <div class="preview">
                                  <table id="exampless" class="display nowrap" style="width:100%">
                                 <thead>
                                    <tr>
                                       <th>Id</th>
                                       <th>Name</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                        @foreach($vehicleTypes as $item)

                                        <tr>
                                              <td>{{$item->id}}</td>
                                              <td>{{$item->name}}</td>
                                              <td><a href="{{route('vehicleType.edit',[$item->id])}}">Edit</td>
                                           </td>
                                        </tr>
                                        @endforeach

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

