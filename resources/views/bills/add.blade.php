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

            <div class="top-bar">

               <!-- BEGIN: Breadcrumb -->

               <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Billing</a> </div>

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

           <form method="post" action="{{url('generate-bill')}}" class="BillForm_______">

            <div class="grid">

               <div class="intro-y flex items-center mt-12">

                  <h2 class="text-lg font-medium mr-auto">

                     Add Bill Form

                  </h2>

               </div>

               <div class="grid grid-cols-12 gap-6 mt-5">

                  <div class="intro-y col-span-12 lg:col-span-12">

                     <!-- BEGIN: Input -->

                     <div class="intro-y box">

                        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">

                           <h2 class="font-medium text-base mr-auto">

                              Add a Bill

                           </h2>

                        </div>

                        <div id="input" class="p-5" style="padding-bottom: 65px;">

                           <div class="preview">

                              @php

                              $insertion  = 1; 

                               @endphp

                                

                  <input type="hidden" value="{{ csrf_token() }}" name="_token" />

                  <input type="hidden" id="id" name="id" <?php if(isset($record[0]->pkg_id)){ echo isset($record[0]->pkg_id)?' value="'.$record[0]->pkg_id.'" ':' '; }?> />

                 <input type="hidden" name="selfcompany" value="{{session('company')[0]->id}}" />

                  <div class="mt-2">

                       <label  class="form-label col-md-4 col-sm-4 col-xs-12" >Enter Bill Number:

                       </label>



                       <div class="col-md-8 col-sm-8 col-xs-12">

                         <input type="number" name="bill_number" readonly class="form-control col-md-7 col-xs-12" value="{{$billNum}}"/>

                       </div>

                  </div>



                  <div class="mt-2">

                       <label class="form-label col-md-4 col-sm-4 col-xs-12">Select a Customer :

                        </label>



                       <div class="col-md-8 col-sm-8 col-xs-12">

                         <select class="form-control col-md-7 col-xs-12" id="customer" name="customer">

                           <option>Select a Customer</option>

                           @foreach($sender as $customer)

                           <option value="{{$customer->id}}" <?php if(isset($record[0]->fk_sender_id)){if($record[0]->fk_sender_id == $customer->id){echo 'selected';}}?>>{{$customer->name}}</option>

                           @endforeach

                         </select>

                     </div>

                  </div>

                  

                    <div class="mt-2">

                       <label class="form-label col-md-4 col-sm-4 col-xs-12">Destination Type :</label>

                        <div class="col-md-8 col-sm-8 col-xs-12">

                            <select class="form-control col-md-7 col-xs-12" id="desType" name="desType">

                              <option value="Domestic">Domestic</option>

                              <option value="Export">Export</option>

                           </select>

                        </div>

                    </div>

                    

                    <!-- <div class="mt-2">

                       <label class="form-label col-md-4 col-sm-4 col-xs-12"> Type :</label>

                        <div class="col-md-8 col-sm-8 col-xs-12">

                            <select class="form-control col-md-7 col-xs-12" id="desType" name="type">

                              <option value="lcl"> LCL </option>

                              <option value="fcl">FCL</option>

                           </select>

                        </div>

                    </div>-->



                   <div class="mt-2">

                        <label class="form-label col-md-4 col-sm-4 col-xs-12">From Date :

                        </label>

                        <div class="col-md-8 col-sm-8 col-xs-12">

                           <input type="date" id="datepicker" name="from" class="form-control col-md-7 col-xs-12" />

                       </div>

                  </div>





                  <div class="mt-2">

                         <label class="form-label col-md-4 col-sm-4 col-xs-12" for="first-name">To Date :

                           </label>

                          <div class="col-md-8 col-sm-8 col-xs-12">

                           <input type="date" id="datepicker1" name="to" class="form-control col-md-7 col-xs-12" />

                        </div>

                  </div>

                

                  <div class="clearfix"></div>

                  <div class="ln_solid"></div>

                  <br/>

                   <div class="mt-2">

                     

                     <div class="col-md-3  form-group has-feedback">

                       <label for="weight" class="form-label col-md-4">Weight

                       </label>

                       <div class="col-md-4">

                         <input type="checkbox" id="weight" name="weight" class="flat" />

                       </div>

                     </div>

                     

                     <div class="col-md-3 form-group has-feedback" id="clickme">

                          <label for="labour" class="form-label col-md-4">Labour

                          </label>

                          <div class="col-md-4" >

                            <input type="checkbox" id="labour" name="labour" />

                          </div>

                     </div>

                     <div class="col-md-3 form-group has-feedback" id="clickmefuel">

                          <label for="fuel" class="form-label col-md-4">Fuel

                          </label>

                          <div class="col-md-4" >

                            <input type="checkbox" id="fuel" name="fuel" />

                          </div>

                     </div>



                     <div class="col-md-3 has-feedback" id="clickmetax">

                       <label for="tax" class="form-label col-md-4 " for="first-name">Tax

                       </label>

                       <div class="col-md-4">

                         <input type="checkbox" id="tax" name="tax" />

                       </div>

                  </div>



               </div>





                  <div class="mt-2" id="labourCharge" style="display: none;">

                     <label class="form-label col-md-4 col-sm-4 col-xs-12" >Labour Charges

                    </label>

                     <div class="col-md-8 col-sm-8 col-xs-12">

                        <input type="text" name="labourCharge" class="form-control col-md-7 col-xs-12" />

                    </div>

                  </div>

                  <div class="mt-2" id="fuelCharge" style="display: none;">

                     <label class="form-label col-md-4 col-sm-4 col-xs-12" >Fuel %

                    </label>

                     <div class="col-md-8 col-sm-8 col-xs-12">

                        <input type="text" name="fuelCharge" class="form-control col-md-7 col-xs-12" />

                    </div>

                  </div>





                   <div class="mt-2" id="taxname" style="display: none;">

                     <label class="form-label col-md-4 col-sm-4 col-xs-12" >Tax Name</span>

                      </label>

                     <div class="col-md-8 col-sm-8 col-xs-12">

                        <input type="text" name="taxname" class="form-control col-md-7 col-xs-12" />

                    </div>

                  </div>



                <div class="clearfix"></div>

                   <div class="mt-2" id="taxpercentage" style="display: none;">

                     <label class="form-label col-md-4 col-sm-4 col-xs-12">Tax%

                      </label>



                     <div class="col-md-8 col-sm-8 col-xs-12">

                         <input type="text" name="taxpercentage" class="form-control col-md-7 col-xs-12" />

                      </div>

                  </div>





                   <div class="clearfix"><br/> <br/> <br/></div>

                        <div class="ln_solid"></div>

                        <div class="form-group">

                          <div class="col-md-6 col-sm-6 col-xs-12">

                            <button class="btn btn-primary" type="reset">Reset</button>

                            <input type="hidden" name="generatedby" value="{{$name}}" />

                              <input type="submit" name="insertdata" class="btn btn-success" value="Generate Bill" <?php if($insertion == 0){ echo 'disabled'; }?>>

                          </div>

                        </div>

                        </div>

                        </div>

                     </div>

                     <!-- END: Input -->

                     <!-- BEGIN: Input Sizing -->

                  </div>

               </div>

            </div>

            </form>

         </div>

      </div>

@endsection

@section('script')

   <script type="text/javascript">



      var mh = [];

  $(document).ready(function(){



   localStorage.clear()  

    $('#labourCharge').hide();

    $('#fuelCharge').hide();

    $('#taxname').hide();

    $('#taxpercentage').hide();

    $('#clickme').click(function(){

        

      if($('#labour').is(':checked')){

            $('#labourCharge').show();

        }else{

            $('#labourCharge').hide();

        }

    });

     $('#clickmefuel').click(function(){

        

      if($('#fuel').is(':checked')){

            $('#fuelCharge').show();

        }else{

            $('#fuelCharge').hide();

        }

    });

    $('#clickmetax').click(function(){

      if($('#tax').is(':checked')){

        $('#taxname').show();

        $('#taxpercentage').show();

      }else{

        $('#taxname').hide();

        $('#taxpercentage').hide();

      }

    });

    

  });

  var status = 'null';

  var ids = 0;

  

 /* function hello_medical(id){

     if ($("#hello_"+id).is(':checked')){

       status = 'medical_hide';

     }

     else{

       status = 'null';

     } 

  }

  */

  /*function hello_carton(id){

     if ($("#carton_check_"+id).is(':checked')){

       status = 'carton_hide';

     }

     else{

       status = 'null';

     }

  }

  */

 /* function view_update(id){

     ids = id;

      bill_ready()

  }*/

  

 /* function bill_ready(){

     var url = '<?php //echo url('/') ?>/generateBillById/'+ids+'/'+status+'';

     location.href = url;

  }

  */

 

  

  

</script>



   </script>

@endsection