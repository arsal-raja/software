
@extends('layouts.master')
@section('body')
main
@endsection
@section('main-content')
@include('includes.mobile-nav')
<div class="flex">
   @include('includes.side-nav')

<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400;700&display=swap" rel="stylesheet">

<style>

.tablePreview table tr td {

    font-family: 'Noto Nastaliq Urdu', serif;

}

.rem{
    grid-column:span 12/span 12;
}
.btn_remove{
    padding: 10px 17px;
    border-radius: 5px;
    margin-top: 27px !important;
    margin-right: 0;
}

</style>



<body class="main">

   
        <!-- BEGIN: Content -->

       <div class="content">
            <!-- BEGIN: Top Bar -->
            <div class="top-bar">
               <!-- BEGIN: Breadcrumb -->
               <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Inventory</a> </div>
               <!-- END: Breadcrumb -->
               <!-- BEGIN: Search -->
               <div class="intro-x relative mr-3 sm:mr-6">
                  <div class="search hidden sm:block">
                     <input type="text" class="search__input form-control border-transparent placeholder-theme-13" placeholder="Search...">
                     <i data-feather="search" class="search__icon dark:text-gray-300"></i> 
                  </div>
                  <a class="notification sm:hidden" href=""> <i data-feather="search" class="notification__icon dark:text-gray-300"></i> </a>
                  <div class="search-result">
                     <div class="search-result__content">
                        <div class="search-result__content__title">Pages</div>
                        <div class="mb-5">
                           <a href="" class="flex items-center">
                              <div class="w-8 h-8 bg-theme-18 text-theme-9 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="inbox"></i> </div>
                              <div class="ml-3">Mail Settings</div>
                           </a>
                           <a href="" class="flex items-center mt-2">
                              <div class="w-8 h-8 bg-theme-17 text-theme-11 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="users"></i> </div>
                              <div class="ml-3">Users & Permissions</div>
                           </a>
                           <a href="" class="flex items-center mt-2">
                              <div class="w-8 h-8 bg-theme-14 text-theme-10 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="credit-card"></i> </div>
                              <div class="ml-3">Transactions Report</div>
                           </a>
                        </div>
                        <div class="search-result__content__title">Users</div>
                        <div class="mb-5">
                           <a href="" class="flex items-center mt-2">
                              <div class="w-8 h-8 image-fit">
                                 <img alt="Nowshera Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-10.jpg">
                              </div>
                              <div class="ml-3">Charlize Theron</div>
                              <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">charlizetheron@left4code.com</div>
                           </a>
                           <a href="" class="flex items-center mt-2">
                              <div class="w-8 h-8 image-fit">
                                 <img alt="Nowshera Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                              </div>
                              <div class="ml-3">Russell Crowe</div>
                              <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">russellcrowe@left4code.com</div>
                           </a>
                           <a href="" class="flex items-center mt-2">
                              <div class="w-8 h-8 image-fit">
                                 <img alt="Nowshera Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-15.jpg">
                              </div>
                              <div class="ml-3">Russell Crowe</div>
                              <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">russellcrowe@left4code.com</div>
                           </a>
                           <a href="" class="flex items-center mt-2">
                              <div class="w-8 h-8 image-fit">
                                 <img alt="Nowshera Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-7.jpg">
                              </div>
                              <div class="ml-3">Al Pacino</div>
                              <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">alpacino@left4code.com</div>
                           </a>
                        </div>
                        <div class="search-result__content__title">Products</div>
                        <a href="" class="flex items-center mt-2">
                           <div class="w-8 h-8 image-fit">
                              <img alt="Nowshera Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-1.jpg">
                           </div>
                           <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                           <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Smartphone &amp; Tablet</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                           <div class="w-8 h-8 image-fit">
                              <img alt="Nowshera Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-12.jpg">
                           </div>
                           <div class="ml-3">Samsung Q90 QLED TV</div>
                           <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Electronic</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                           <div class="w-8 h-8 image-fit">
                              <img alt="Nowshera Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-11.jpg">
                           </div>
                           <div class="ml-3">Nike Air Max 270</div>
                           <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Sport &amp; Outdoor</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                           <div class="w-8 h-8 image-fit">
                              <img alt="Nowshera Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-1.jpg">
                           </div>
                           <div class="ml-3">Sony Master Series A9G</div>
                           <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Electronic</div>
                        </a>
                     </div>
                  </div>
               </div>
               <!-- END: Search -->
               <!-- BEGIN: Notifications -->
               <div class="intro-x dropdown mr-auto sm:mr-6">
                  <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false"> <i data-feather="bell" class="notification__icon dark:text-gray-300"></i> </div>
                  <div class="notification-content pt-2 dropdown-menu">
                     <div class="notification-content__box dropdown-menu__content box dark:bg-dark-6">
                        <div class="notification-content__title">Notifications</div>
                        <div class="cursor-pointer relative flex items-center ">
                           <div class="w-12 h-12 flex-none image-fit mr-1">
                              <img alt="Nowshera Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-10.jpg">
                              <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                           </div>
                           <div class="ml-2 overflow-hidden">
                              <div class="flex items-center">
                                 <a href="javascript:;" class="font-medium truncate mr-5">Charlize Theron</a> 
                                 <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">05:09 AM</div>
                              </div>
                              <div class="w-full truncate text-gray-600 mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                           </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                           <div class="w-12 h-12 flex-none image-fit mr-1">
                              <img alt="Nowshera Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                              <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                           </div>
                           <div class="ml-2 overflow-hidden">
                              <div class="flex items-center">
                                 <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a> 
                                 <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">03:20 PM</div>
                              </div>
                              <div class="w-full truncate text-gray-600 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                           </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                           <div class="w-12 h-12 flex-none image-fit mr-1">
                              <img alt="Nowshera Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-15.jpg">
                              <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                           </div>
                           <div class="ml-2 overflow-hidden">
                              <div class="flex items-center">
                                 <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a> 
                                 <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">01:10 PM</div>
                              </div>
                              <div class="w-full truncate text-gray-600 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                           </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                           <div class="w-12 h-12 flex-none image-fit mr-1">
                              <img alt="Nowshera Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-7.jpg">
                              <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                           </div>
                           <div class="ml-2 overflow-hidden">
                              <div class="flex items-center">
                                 <a href="javascript:;" class="font-medium truncate mr-5">Al Pacino</a> 
                                 <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">01:10 PM</div>
                              </div>
                              <div class="w-full truncate text-gray-600 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                           </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                           <div class="w-12 h-12 flex-none image-fit mr-1">
                              <img alt="Nowshera Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-8.jpg">
                              <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                           </div>
                           <div class="ml-2 overflow-hidden">
                              <div class="flex items-center">
                                 <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a> 
                                 <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">01:10 PM</div>
                              </div>
                              <div class="w-full truncate text-gray-600 mt-0.5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- END: Notifications -->
               <!-- BEGIN: Account Menu -->
               <div class="intro-x dropdown w-8 h-8">
                  <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false">
                     <img alt="Nowshera Tailwind HTML Admin Template" src="dist/images/profile-6.jpg">
                  </div>
                  <div class="dropdown-menu w-56">
                     <div class="dropdown-menu__content box bg-theme-26 dark:bg-dark-6 text-white">
                        <div class="p-4 border-b border-theme-27 dark:border-dark-3">
                           <div class="font-medium">Charlize Theron</div>
                           <div class="text-xs text-theme-28 mt-0.5 dark:text-gray-600">Software Engineer</div>
                        </div>
                        <div class="p-2">
                           <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                           <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                           <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                           <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                        </div>
                        <div class="p-2 border-t border-theme-27 dark:border-dark-3">
                           <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- END: Account Menu -->
            </div>
            <!-- END: Top Bar -->
            <form method="post" autocomplete="off"  @if(!empty($query)) action="{{route('edit-inventory-process')}}" @endif @if(empty($query)) action="{{route('add-inventory-data')}}" @endif>
               @csrf
            <div class="grid">
               <div class="intro-y flex items-center mt-12">
                  <h2 class="text-lg font-medium mr-auto">
                     Inventory Management
                  </h2>
               </div>
               <div class="grid grid-cols-12 gap-6 mt-5">
                  <div class="intro-y col-span-12 lg:col-span-12">
                     <!-- BEGIN: Input -->
                     <div class="intro-y box">
                        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                           <h2 class="font-medium text-base mr-auto">
                              Add Inventory
                           </h2>
                        </div>
                        <div id="Oil">
                            <div id="input" class="p-5">
                           <div class="preview">
                              <div class="mt-2 grid grid-cols-12 gap-2 positon-relative invent">
                              <div class="col-span-4 positon-relative">
<label for="regular-form-2" class="form-label">Inventory Name</label>
                                 <div class="error"></div>

  <select name="nameofinventory" class="form-control">
      <option>Select Products</option>
      @foreach($comp as $products)
<option value="{{$products->id}}"  @if(!empty($query)) @if($products->id == $query->inventory_name) {{'selected'}}  @endif @endif>{{$products->Des}}</option>
@endforeach
  </select>
                       
                              </div>
                              <div class="col-span-4 positon-relative">
        <label for="txtBox" class="form-label">Unit of measurement </label>
      <select id="drop"  onchange="find()" name="UOM" class="form-control">
                                 <option>Please Select... </option>      
      <option @if(!empty($query)) @if($query->UOM == 'KG') {{'selected'}}  @endif @endif>KG</option>   
              <option @if(!empty($query)) @if($query->UOM == 'Litres') {{'selected'}}  @endif @endif>Liters</option>   
                                    <option @if(!empty($query)) @if($query->UOM == 'Dozen') {{'selected'}}  @endif @endif>Dozen</option>     
                                    <option @if(!empty($query)) @if($query->UOM == 'Piece') {{'selected'}}  @endif @endif>Piece</option>
                               </select>
                              </div>
                              
                              
                              <div class="col-span-4 positon-relative">
                              <div class="col-span-4 positon-relative">
                              <label for="txtBox" class="form-label">Quantity</label>
<input id="regular-form-2" type="text" @if(!empty($query)) value="{{$query->InvQuantity}}" @endif name="inventoryquantity" class="form-control" placeholder="Enter Quantity" >  

<input id="regular-form-2" type="hidden" @if(!empty($query)) value="{{$query->id}}" @endif name="id" class="form-control">  
                              </div>
                              
                                




                              </div>
                              </div>
                              <div class="mt-2 grid grid-cols-12 gap-2 positon-relative ">
                              <div class="col-span-4 positon-relative">
                                 
                              <label for="txtBox" class="form-label">Capacity</label>
                                 <input id="regular-form-2" type="text" @if(!empty($query)) value=" {{$query->Capacity}}" @endif name="Capacity" class="form-control" placeholder="Enter Amount" >
                              
                              
                              </div>
                        
                              <div class="col-span-4 positon-relative">
                                 <label for="txtBox" class="form-label">Rate per Drum, Cotton, Bucket, </label>
                     <input id="regular-form-2" @if(!empty($query)) value="{{$query->rate}}" @endif type="text" name="rateper" class="form-control" placeholder="Enter Amount" >
                                 </div>

                        
                              <div class="col-span-4 positon-relative">
                              <label for="regular-form-2" class="form-label">Packing</label>
                            <select id="dropdownvalues" name="packing" class="form-control" >
                                @if(!empty($query))  <option>{{$query->Packing}}</option>  @endif
                               </select>
                              </div>
                           

                              </div>  
                              </div>


                             

                              <button class="btn btn-primary mt-5">Submit</button>
                           </div>
                        </div>
                     </form>
                        <div id="input" class="p-5">
                           <div class="preview" style="overflow:auto">
                              <table id="examples" class="display nowrap dataTable" style="width:100%">
                                 <thead>
                                    <tr>
                                       <th>ID</th>
                                       <th>Inventory Name</th>
                                       <th>Date</th>
                                       <th>UOM</th>
                                       <th>Capacity</th>
                              <th>Rate</th>
                                       <th>Quantity</th>
                                         <th>Packing</th>
                              
                                       <th>Total</th> 
                                       <th>Action</th>
                                    </tr>

                                 </thead>
                                 <tbody>
                                    
                                  @foreach($inventorydata as $nventory)
                                    <tr>
                                       <td>{{$nventory->id}}</td>
                                      <td>{{$nventory->Des}}</td>
                                       <td>{{$nventory->InvDate}}</td>
                                       <td>{{$nventory->UOM}}</td>
                                       <td>{{$nventory->Capacity}} @if($nventory->UOM =='Liters')  Ltr.  @endif  @if($nventory->UOM =='KG') KG  @endif  @if($nventory->UOM =='Dozen') Ctn  @endif @if($nventory->UOM =='Piece') Unit  @endif   </td>
                                       <td>{{$nventory->rate}} @if($nventory->UOM =='Liters')  / Ltr.  @endif  @if($nventory->UOM =='KG') / KG  @endif  @if($nventory->UOM =='Dozen') / Ctn  @endif @if($nventory->UOM =='Piece') / Unit  @endif  </td>
                                       <td>{{$nventory->InvQuantity}}</td>
                                       <td>
                                           <?php
                            $warehouse = DB::table('warehouse')->where('id',$nventory->warehouse)->first();
                            $packing = DB::table('packing')->where('id',$nventory->Packing)->first();
                                           ?>
                                            {{$packing->PackingName}}
                                       </td>

                                       <td>{{$nventory->InvAmount}}</td>
                                        <td>
                                          <a href = "{{route('edit-inventory',['id'=>$nventory->id])}}">Edit |  </a> 
                                           <a href = "{{route('delete-inventory',['id'=>$nventory->id])}}">delete  </a>
                                         
                                       </td>                                     
                                    </tr>
                                   
                                 </tbody>
                                 @endforeach
                                
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
         <!-- END: Content -->
@section('script')
<script>
 function find(){ 
    var values = $("#drop").val();
    $.ajax({
       type:'GET',
       url:'<?php echo url('/') ?>/checkpacking', 
       data:{values:values},
      success:function(res){
      $("#dropdownvalues").html(res);  
      }  
    });
 }

</script>
@endsection
