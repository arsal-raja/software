<!DOCTYPE html>

<html lang="en" class="light">

   <head>

      <meta charset="utf-8">

      <link href="{{asset('src/images/icon.png')}}" rel="shortcut icon">


      <meta name="viewport" content="width=device-width, initial-scale=1">

      <meta name="description" content="NSK admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">

      <meta name="keywords" content="admin template, NSK Admin Template, dashboard template, flat admin template, responsive admin template, web app">

      <meta name="csrf-token" content="{{ csrf_token() }}" />

      <meta name="author" content="LEFT4CODE">

      <title>SMS Logistics</title>

      <link rel="stylesheet" href="{{asset('dist/css/app.css')}}" />

      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <!--<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>-->



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

 <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<style>



#DataTables_Table_0_processing {

    color: #000 !important;

}



    </style>

   </head>













       <!-- preloader open -->

    <div id="preloader">

        <div class="logo_loader">



        </div>



    </div>

    <!-- preloader close     -->









    <body class="@yield('body')">



       @yield('main-content')





      <!-- BEGIN: Dark Mode Switcher-->

      <!-- BEGIN: Dark Mode Switcher-->

      <!-- BEGIN: JS Assets-->



     <!-- <div class="cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10 onClickdivAddorRemove">

         <div class="mr-4 text-gray-700 dark:text-gray-300">Dark Mode</div>

         <div class="dark-mode-switcher__toggle border"></div>

      </div>-->

      <!-- END: Dark Mode Switcher-->

      <!--<script src="{{asset('dist/js/jquery.js')}}"></script>-->

      <script src="{{asset('dist/js/app.js')}}"></script>

      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">



    <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->



    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



      <script>

    $(function() {

       // $("#tabs").tabs();

    });

    </script>

     <!-- <script src="http://www.ajsoftpk.com/urdutextbox/urdutextbox.js"></script>-->

      <script src="https://cdn.jsdelivr.net/npm/handsontable@latest/dist/handsontable.min.js"></script>

   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/handsontable@latest/dist/handsontable.full.css">





      <!-- END: Dark Mode Switcher-->

      <!-- BEGIN: JS Assets-->

      <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

      <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

      <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>

      <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

      {!! HTML::script("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js") !!}



   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>



     @include('admin.include.footerjs')

      @yield('script')

      @yield('footerjs')





<!--<script src="{{asset('dist/js/orderchart.js')}}"></script>-->



      <script>

    //   $('select').select2();



            $('.txtOnly').keypress(function (e) {

			var regex = new RegExp("^[a-zA-Z ]*$");

			var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);

			if (regex.test(str)) {

				return true;

			}

			else

			{



			return false;

			}

		});

        </script>





      <!-- END: JS Assets-->

   </body>

   @yield('scripts')

   <script>





      $(document).ready(function() { var max_fields = 10; var wrapper = $(".phoneDivEmail"); var add_button = $(".AddMoreEmail"); var x = 1; $(add_button).click(function(e){ e.preventDefault(); if(x < max_fields){ x++; $(wrapper).append('<div class="col-span-12"><div class="mt-2"><label for="regular-form-3" class="form-label">Email</label><input id="regular-form-3" type="text" class="form-control" placeholder="Enter Email"  name="emails[]"></div></div>'); } });

          $(wrapper).on("click",".remove_field", function(e){ e.preventDefault(); $(this).parent('div').remove(); x--; }) });

   </script>

   <script>

      $(document).ready(function() { var max_fields = 10; var wrapper = $(".phoneDivbar"); var add_button = $(".AddMorePhone"); var x = 1; $(add_button).click(function(e){ e.preventDefault(); if(x < max_fields){ x++; $(wrapper).append('<div class="col-span-12" id="remphone-'+x+'"><div class="mt-2"><label for="regular-form-3" class="form-label">Phone</label><input id="regular-form-3" type="number" class="valid form-control" placeholder="Enter Phone" name="phones[]"><button type="button" class="btn_remove_phone btn btn-danger mt-5">Remove</button></div>'); } });

          $(wrapper).on("click",".remove_field", function(e){ e.preventDefault(); $(this).parent('div').remove(); x--; });

          $(document).on('click',".btn_remove_phone", function(e) {

    e.preventDefault();

    $('#remphone-'+x+'').remove();

    x--;

    });

      });

   </script>

   <script>

      $(document).ready(function() { var max_fields = 10; var wrapper = $(".phoneDivAddress"); var add_button = $(".AddMoreAddress"); var x = 1; $(add_button).click(function(e){ e.preventDefault(); if(x < max_fields){ x++; $(wrapper).append('<div class="col-span-12"><div class="mt-2"><label for="regular-form-3" class="form-label">Address</label><textarea id="regular-form-3" class="form-control" placeholder="Enter Address"  name="address[]"></textarea></div>'); } });

          $(wrapper).on("click",".remove_field", function(e){ e.preventDefault(); $(this).parent('div').remove(); x--; }) });

   </script>

   <script>

      $(document).ready(function() { var max_fields = 10; var wrapper = $(".phoneDivAddress_ware"); var add_button = $(".AddMoreAddress"); var x = 1; $(add_button).click(function(e){ e.preventDefault(); if(x < max_fields){ x++; $(wrapper).append('<div class="col-span-12" id="rem-'+x+'"><div class="mt-2"><label for="regular-form-3" class="form-label">Address(Warehouse)</label><textarea id="regular-form-3" class="form-control" placeholder="Enter Address" name="address[]"></textarea><button type="button" class="btn_remove btn-danger mt-5">Remove</button></div>'); } });

          $(wrapper).on("click",".remove_field", function(e){ e.preventDefault(); $(this).parent('div').remove(); x--; });

           $(document).on('click',".btn_remove", function(e) {

    e.preventDefault();

    $('#rem-'+x+'').remove();

    x--;

    });

      });

   </script>

      <script>

      $(document).ready(function() { var max_fields = 10; var wrapper = $(".phoneDivAddress_stat"); var add_button = $(".AddMoreAddress_stat"); var x = 1; $(add_button).click(function(e){ e.preventDefault(); if(x < max_fields){ x++; $(wrapper).append('<div class="col-span-12" id="rem-'+x+'"><div class="mt-2"><label for="regular-form-3" class="form-label">Address</label><textarea id="regular-form-3" class="form-control" placeholder="Enter Address" name="address[]"></textarea><button type="button" class="btn_remove btn-danger mt-5">Remove</button></div>'); } });

          $(wrapper).on("click",".remove_field", function(e){ e.preventDefault(); $(this).parent('div').remove(); x--; });

           $(document).on('click',".btn_remove", function(e) {

    e.preventDefault();

    $('#rem-'+x+'').remove();

    x--;

    });

      });

   </script>

   <script>

      $(document).ready(function() { var max_fields = 10; var wrapper = $(".phoneDivEmail"); var add_button = $(".AddMoreStation"); var x = 1; $(add_button).click(function(e){ e.preventDefault(); if(x < max_fields){ x++; $(wrapper).append('<div class="col-span-12"><div class="mt-2"><label for="regular-form-4" class="form-label">Station</label><input id="regular-form-4" type="text" class="form-control" placeholder="Enter Station"></div></div>'); } });

          $(wrapper).on("click",".remove_field", function(e){ e.preventDefault(); $(this).parent('div').remove(); x--; }) });

   </script>

   <script>

      $(document).ready(function() { var max_fields = 10; var wrapper = $(".phoneDivDestination"); var add_button = $(".AddMorePhone"); var x = 1; $(add_button).click(function(e){ e.preventDefault(); if(x < max_fields){ x++; $(wrapper).append('<div class="col-span-12"><div class="mt-2"><label for="regular-form-5" class="form-label">Destination</label><input id="regular-form-5" type="text" class="form-control" placeholder="Enter Destination" name="destinations[]"></div></div>'); } });

          $(wrapper).on("click",".remove_field", function(e){ e.preventDefault(); $(this).parent('div').remove(); x--; }) });

   </script>

   <script>

      $(document).ready(function() { var max_fields = 10; var wrapper = $(".phoneDivDetail"); var add_button = $(".AddMoreDetail"); var x = 1; $(add_button).click(function(e){ e.preventDefault(); if(x < max_fields){ x++; $(wrapper).append('<div class="col-span-12"><div class="mt-2"><label for="regular-form-4" class="form-label">Detail</label><input id="regular-form-4" type="text" class="form-control" placeholder="Enter Detail"></div></div>'); } });

          $(wrapper).on("click",".remove_field", function(e){ e.preventDefault(); $(this).parent('div').remove(); x--; }) });

   </script>

   <script>

      $(document).ready(function() { var max_fields = 10; var wrapper = $(".senderForm"); var add_button = $(".AddMoreSender"); var x = 1; $(add_button).click(function(e){ e.preventDefault(); if(x < max_fields){ x++; $(wrapper).append('<div class="col-span-4"><label for="regular-form-1" class="form-label">Sender</label><select id="regular-form-1" class="form-select sm:mr-2" aria-label="Default select example"><option>Sender 1</option><option>Sender 2</option><option>Sender 3</option></select></div><div class="col-span-4"><label for="regular-form-4" class="form-label">Sender Name</label><input id="regular-form-4" type="text" class="form-control" placeholder="Enter Sender Name"></div><div class="col-span-4"><label for="regular-form-4" class="form-label">Sender Phone</label><input id="regular-form-4" type="text" class="form-control" placeholder="Enter Sender Phone"></div>'); } });

          $(wrapper).on("click",".remove_field", function(e){ e.preventDefault(); $(this).parent('div').remove(); x--; }) });

   </script>

   <script>

      $(document).ready(function() { var max_fields = 10; var wrapper = $(".receiverForm"); var add_button = $(".AddMoreReceiver"); var x = 1; $(add_button).click(function(e){ e.preventDefault(); if(x < max_fields){ x++; $(wrapper).append('<div class="col-span-4"><label for="regular-form-1" class="form-label">Receiver</label><select id="regular-form-1" class="form-select sm:mr-2" aria-label="Default select example"><option>Receiver 1</option><option>Receiver 2</option><option>Receiver 3</option></select></div><div class="col-span-4"><label for="regular-form-4" class="form-label">Receiver Name</label><input id="regular-form-4" type="text" class="form-control" placeholder="Enter Receiver Name"></div><div class="col-span-4"><label for="regular-form-4" class="form-label">Receiver Phone</label><input id="regular-form-4" type="text" class="form-control" placeholder="Enter Receiver Phone"></div></div>'); } });

          $(wrapper).on("click",".remove_field", function(e){ e.preventDefault(); $(this).parent('div').remove(); x--; }) });

   </script>



   <script>

      $(document).ready(function() { var max_fields = 100; var wrapper = $(".new_entry"); var add_button = $(".add"); var x = 1; $(add_button).click(function(e){ e.preventDefault(); if(x < max_fields){ x++; $(wrapper).append('<tr> <td><input type="text" placeholder="Quantity"> </td><td><select><option>Medicine</option><option>Literature</option><option>Sample</option><option>Carton</option><option>Weight</option><option>Other</option> </select></td><td><textarea Placeholder="Description"></textarea></td><td><input type="text"placeholder="Weight"></td><td><select><option>Paid</option><option>Unpaid</option></select></td><td><input type="text"placeholder="Remarks"></td></tr>'); } });

          $(wrapper).on("click",".remove_field", function(e){ e.preventDefault(); $(this).parent('div').remove(); x--; }) });

   </script>

   <script>

      $(document).ready(function() { var max_fields = 100; var wrapper = $(".new_entry_"); var add_button = $(".add_deatils"); var x = 1; $(add_button).click(function(e){ e.preventDefault(); if(x < max_fields){ x++; $(wrapper).append('<tr><td><input type="text" placeholder=""></td><td><textarea Placeholder="Description"></textarea></td><td><input type="text" placeholder=""></td><td><input type="text" placeholder=""></td><td><input type="text" placeholder=""></td><td><input type="text" placeholder=""></td></tr>'); } });

          $(wrapper).on("click",".remove_field", function(e){ e.preventDefault(); $(this).parent('div').remove(); x--; }) });

   </script>

   <script>

      $(document).ready(function() { var max_fields = 10; var wrapper = $(".other"); var add_button = $(".AddMoreother"); var x = 1; $(add_button).click(function(e){ e.preventDefault(); if(x < max_fields){ x++; $(wrapper).append('<div class="rem" id="remlcl-'+x+'"><div class="col-span-3"><label for="regular-form-1" class="form-label">Charges Details</label><input type="text" name="lcl_other_charges[]" placeholder="Enter Charges Details" class="form-control"></div><div class="col-span-3"><label for="regular-form-1" class="form-label">Amount</label><input type="text" placeholder="Enter Amount" class="form-control" name="lcl_amount[]"></div><div class="col-span-3"><button type="button" class="btn_remove btn-danger mt-5">Remove</button></div><div class="col-span-3"></div></div>'); } });

          $(wrapper).on("click",".remove_field", function(e){ e.preventDefault(); $(this).parent('div').remove(); x--; });

            $(document).on('click',".btn_remove", function(e) {

            e.preventDefault();



            $('#remlcl-'+x+'').remove();

            x--;

        });

      });

   </script>



   <script>



      $(document).ready(function() { var max_fields = 10; var wrapper = $(".othercharges"); var add_button = $(".AddMoreother_charges"); var x = 1; $(add_button).click(function(e){ e.preventDefault(); if(x < max_fields){ x++; $(wrapper).append('<div class="rem" id="rem-'+x+'"><div class="col-span-3"><label for="regular-form-1" class="form-label">Charges Details</label><input type="text" name="fcl_other_charges[]" placeholder="Enter Charges Details" class="form-control"></div><div class="col-span-3"><label for="regular-form-1" class="form-label">Amount</label><input type="text" placeholder="Enter Amount" class="form-control" name="fcl_amount[]"></div><div class="col-span-3"><button type="button" class="btn_remove_fcl btn btn-danger mt-5">Remove</button></div><div class="col-span-3"></div></div>'); } });

          $(wrapper).on("click",".remove_field", function(e){ e.preventDefault(); $(this).parent('div').remove(); x--; });

            $(document).on('click',".btn_remove_fcl", function(e) {

            e.preventDefault();

            $('#rem-'+x+'').remove();

            x--;

        });

      });

   </script>





    <!--<script>

      $(document).ready(function() { var max_fields = 10; var wrapper = $(".AddMorePackages1"); var add_button = $(document); var x = 1; $(add_button).on('click','.AddMorePackages',function(e){ e.preventDefault(); alert(1); if(x < max_fields){ x++; $(wrapper).append('<div class="grid grid-cols-12 gap-2 AddMorePackageslcl" id="customTable"><div class="col-span-4"><label for="regular-form-1" class="form-label">Select Package</label><select id="regular-form-1" class="lcl_packages form-select sm:mr-2" aria-label="Default select example" name="lcl_package[]"><option> Select Package </option> {{-- @foreach($packeges as $packege) <option value="{{$packege->id}}"> {{$packege->packagename}} </option> @endforeach --}}</select></div><div class="col-span-2"><label for="regular-form-1" class="form-label">From</label><input type="text" placeholder="Enter Amount" class="form-control" value="Karachi" readonly></div><div class="col-span-2"><label for="regular-form-1" class="form-label">To</label><select id="regular-form-1" class="lcl_packages form-select sm:mr-2" aria-label="Default select example" name="lcl_package[]"><option> Select Package </option> {{-- @foreach($packeges as $packege) <option value="{{$packege->id}}"> {{$packege->packagename}} </option> @endforeach </select> --}} </div> <div class="col-span-2"><label for="regular-form-1" class="form-label">Rate</label><input type="text" placeholder="Enter Amount" class="form-control"></div><div class="col-span-2"><button class="btn btn-primary mt-5 AddMorePackages" type="button">Add More</button></div></div>'); }});

          $(wrapper).on("click",".remove_field", function(e){ e.preventDefault(); $(this).parent('div').remove(); x--; });

            $(document).on('click',".btn_remove", function(e) {

            e.preventDefault();

            $('#rem-'+x+'').remove();

            x--;

        });

      });

   </script>-->



	<script>

      $(document).ready(function() { var max_fields = 10; var wrapper = $(".AddMorePackageslcl"); var add_button = $(".AddMorePackages"); var x = 1; $(add_button).click(function(e){ e.preventDefault(); if(x < max_fields){ x++; $(wrapper).append('<div class="col-span-6"><label for="regular-form-1" class="form-label">Select Package</label><select id="regular-form-1" class="lcl_packages form-select sm:mr-2" aria-label="Default select example" name="lcl_package[]"> <option> Select Package </option> @if(!empty($lcl_packeges))@foreach($lcl_packeges as $packege)<option value="{{$packege->id}}"> {{$packege->packagename}}</option> @endforeach @endif </select></div><div class="col-span-6"></div><div class="lcl_entrustation_details_view" style="width:100%; grid-column: span 12 / span 12"><table id="customTable"><thead><tr></tr></thead><tbody class="new_entry"></tbody></table></div>'); }});

          $(wrapper).on("click",".remove_field", function(e){ e.preventDefault(); $(this).parent('div').remove(); x--; });

            $(document).on('click',".btn_remove", function(e) {

            e.preventDefault();

            $('#rem-'+x+'').remove();

            x--;

        });

      });

   </script>

   <script>

      $(document).ready(function() { var max_fields = 10; var wrapper = $(".AddMorePackagesfcl"); var add_button = $(".AddMorePackages_fcl"); var x = 1; $(add_button).click(function(e){ e.preventDefault(); if(x < max_fields){ x++; $(wrapper).append('<div class="col-span-6"><label for="regular-form-1" class="form-label">Select Package</label><select id="regular-form-1" class="packages form-select sm:mr-2" aria-label="Default select example" name="package[]"> <option> Select Package </option> @if(!empty($packeges))@foreach($packeges as $packege)<option value="{{$packege->id}}"> {{$packege->packagename}}</option> @endforeach @endif </select></div><div class="col-span-6"><button type="button" class="btn_remove btn-danger mt-5">Remove</button></div></div><div class="station_details_view" style="width:100%; grid-column: span 12 / span 12"><table id="customTable"><thead><tr></tr></thead><tbody class="new_entry"></tbody></table></div>'); }});

          $(wrapper).on("click",".remove_field", function(e){ e.preventDefault(); $(this).parent('div').remove(); x--; });

            $(document).on('click',".btn_remove", function(e) {

            e.preventDefault();

            $('#rem-'+x+'').remove();

            x--;

        });

      });

   </script>

   <script>

      $(document).ready(function() { var max_fields = 10; var wrapper = $(".Attach"); var add_button = $(".AddMoreAttach"); var x = 1; $(add_button).click(function(e){ e.preventDefault(); if(x < max_fields){ x++; $(wrapper).append('<div class="grid grid-cols-12 gap-2 col-span-12" id="rem-'+x+'"><div class="col-span-8" ><label for="regular-form-1" class="form-label">Company Attachment</label><input id="regular-form-2" type="file" class="form-control" placeholder="Name" name="name"></div><div class="col-span-4"><button type="button" class="btn_remove btn-danger mt-5">Remove</button></div></div>'); } });

          $(wrapper).on("click",".remove_field", function(e){ e.preventDefault(); $(this).parent('div').remove(); x--; });

           $(document).on('click',".btn_remove", function(e) {

    e.preventDefault();

    $('#rem-'+x+'').remove();

    x--;

    });

      });

   </script>

   <script>

       $("#Reset").bind("click", function() {

        $("input, textarea").val("");

    	});

    </script>



   <script>

  $(document).on('change','#switcher',function(){

      if($('.viewchange input:checkbox').attr('checked','checked')){

          $('.classic').toggleClass('open_classic');

          $('.wizard').toggleClass('open_wizard');

      }

  });

   </script>

   <script>

       $(document).on('click','#his_btn',function(){

        $('.builty_history').toggleClass('builty_history_show');

       });

   </script>

   <script>

 $(document).ready(function(){

     var builties = [];



    $(".wizard .step").each(function(e) {

        if (e != 0)

            $(this).hide();

    });





    // console.log(numItems);

    // var hello = 16-15;

    //     console.log(hello);

    //  if (numItems => 2){

    //     $("#next").show();

    //     $("#prev").show();

    // }

    //  else {



    //  }



    $("#prev").hide();

    $("#prev1").hide();

    $("#viewPrint").hide();

    $("#submit_wiz").hide();

    var count = 2;

    $("#next").click(function(){

        count++;

         $("#prev").show();

         $("#prev1").show();

          var numItems = $('.wizard').children('div').length;

          --numItems

          if(numItems == count){

               $("#next").hide();

               $("#viewPrint").show();



                $.each($(".builties:checkbox:checked"), function(){



                builties.push($(this).val());

            });



                 $.ajax({

                    type:'GET',

                    url:'<?php echo url('/') ?>/get-total-challan-frieght',

                    data:{builties:builties},

                    success:function(res){

                        $('.Total_Frieght').val(res);





                        $("#submit_wiz").show();

                    }

                });











          }

        //   $("#date_c").keyup(function () {

        //         var value = $(this).val();

        //         console.log(value)

        //         $(".date_c2").val(value);

        //     });

        var value = $("#date_c").val();

                // console.log(value)

                $(".date_c2").val(value);

        if ($(".wizard .step:visible").next().length != 0)

            $(".wizard .step:visible").next().show().prev().hide();

        else {

            $(".wizard .step:visible").hide();

            $(".wizard .step:first").show();

        }

        return false;

    });

      $(".date_c2").change(function () {

                var value2 = $(this).val();

                // console.log(value2);

                $(".date_c2").val(value2);

                $("#date_c").val(value2);

            });



    $("#prev").click(function(){

         count--;



         $("#next").show();





          if(count == 2){

               $("#prev").hide();



          }

        if ($(".wizard .step:visible").prev().length != 0)

            $(".wizard .step:visible").prev().show().next().hide();

        else {

            $(".wizard .step:visible").hide();

            $(".wizard .step:last").show();

        }

        return false;

    });

    $("#prev1").click(function(){

         count--;



         $("#next").show();





          if(count == 2){

               $("#prev1").hide();



          }



        if ($(".wizard .step:visible").prev().length != 0)



            $(".wizard .step:visible").prev().show().next().hide();

        else {

            $(".wizard .step:visible").hide();

            $(".wizard .step:last").show();

        }

        return false;

    });

});



   </script>

<script>

$(document).ready(function(){

   $('.cs_type').click(function(){

       $('.cs_type').removeClass('active_');

       $(this).addClass('active_');

   });

});

</script>

<script>

  $(document).on('click',".cs_type_",function(){

        $(this).addClass('active_');

   });

</script>





<script>

// $('select').select2();

$(document).ready(function(){

   $('.cs_lang').click(function(){

       $('.cs_lang').removeClass('active_');

       $(this).addClass('active_');

   });

});

</script>

<script>

  $(document).on('click',".cs_lang",function(){

        $(this).addClass('active_');

   });

</script>



<script>

   $(document).ready( function(){

       $('.close_pop').click(function() {

        $(".builty_history").removeClass("builty_history_show");

    });

   });

$(".accordion").accordion({collapsible: true});

   </script>

   <script>



// preloader

window.setTimeout(function() {

    document.getElementById('preloader').style.display = 'none';

});

// preloader



       $('#example1111').DataTable({

            "pageLength":25,

               dom: 'Bfrtip',

                buttons: [

            { extend: 'print', exportOptions:

                { columns: ':visible' }

            },

            // { extend: 'copy', exportOptions:

            //      { columns: [ 0, ':visible' ] }

            // },

            // { extend: 'excel', exportOptions:

            //      { columns: ':visible' }

            // },

            { extend: 'pdf'//, exportOptions:

                //   { columns: [ 0, 1, 2, 3, 4 ,5,6,7,8] }

            }

           ],

             });

$(".AddMorebtn____btn_____CLICK").click(function () {

  $(".divAreaSection").append('<div class="col-span-3 positon-relative"><label for="txtBox" class="form-label">Description</label><input id="regular-form-2"  type="text"  name="desc[]" class="form-control" placeholder="Enter Description" ></div><div class="col-span-3 positon-relative"><label for="txtBox" class="form-label">Reference</label><input id="regular-form-2"  type="text"  name="ref[]" class="form-control" placeholder="Enter Reference" ></div><div class="col-span-4 positon-relative"><label for="txtBox" class="form-label">Amount</label><input id="regular-form-2"  type="text"  name="amount[]" class="form-control" placeholder="Enter Amount" ></div>');

});

   </script>



	</html>
