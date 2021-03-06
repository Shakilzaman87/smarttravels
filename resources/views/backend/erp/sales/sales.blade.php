@extends('backend.app')

@section('title', 'Admin Website Pages')

@section('body')

<style>
.select2-container--default .select2-results__option[aria-selected="true"] {
  background-color: #009688;
	color:white;
}
.delete-btn{
  padding-left: 4px;
  /* margin-right: 30px; */
}
</style>

     <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
           <div class="header-icon">
              <i class="fa fa-balance-scale"></i>
           </div>
           <div class="header-title">
              <h1>Sales</h1>
              <small>List of all Sales</small>
           </div>
        </section>
        <!-- Main content -->
        <section class="content">
           <div class="row">
              <div class="col-sm-12">
                 <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                       <div class="btn-group" id="buttonexport">
                          <a href="#">
                             <h4>Sales List</h4>

          									@if ($errors->any())
          										@foreach ($errors->all() as $error)
          											<span style="color:red">{{ $error }}</span>
          										@endforeach
          									@endif

          									@if(Session::has('flash_message_insert'))
          									  <span style="color:green">{{ Session::get('flash_message_insert') }}</span>
          									@elseif(Session::has('flash_message_update'))
          										<span style="color:green">{{ Session::get('flash_message_update') }}</span>
          									@elseif(Session::has('flash_message_delete'))
          										<span style="color:red">{{ Session::get('flash_message_delete') }}</span>
          									@endif
                          </a>
                       </div>
                    </div>
                    <div class="panel-body">
                    <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                       <div class="btn-group">
                        <div class="buttonexport" id="buttonlist">
                          <a class="btn btn-add" href="#" data-toggle="modal" data-target="#salesadd" > <i class="fa fa-plus"></i> Add New Sales </a>
                          <button type="button" class="btn btn-add" id="salessearchyearbutton"><i class="fa fa-search"></i> Search Year</button>
                          <button type="button" class="btn btn-add" id="salessearchmonthbutton"><i class="fa fa-search"></i> Search Month</button>
                          <button type="button" class="btn btn-add" id="salessearchdaybutton"><i class="fa fa-search"></i> Search Day</button>
                        </div>
                      </div>
                       <!-- ./Plugin content:powerpoint,txt,pdf,png,word,xl -->
                       <div class="table-responsive">
                          <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                             <thead>
                                <tr class="info">
                                   <th>Item Name</th>
                                   <th>SKU</th>
                                   <th>Price</th>
                                   <th>Date</th>
                                   <th>Customer</th>
                                   <th>Type</th>
                                   <th>Rating</th>
                                   <th>Action</th>
                                </tr>
                             </thead>
                             <tbody>
                               @foreach($allsales as $sales)
                              <tr>
                                 <td>{{$sales->sales_item_name}}</td>
                                 <td>{{$sales->sales_sku}}</td>
                                 <td>
                                   {{$sales->sales_price}}
                                   @if($optionscurrency)
                     								{{$optionscurrency->currency}}
                     							 @endif
                                 </td>
                                 <td>{{$sales->sales_date}}</td>
                                 <td>
                                   @if($sales->customer)
                                   {{$sales->customer->customer_name}}
                                   @endif
                                 </td>
                                 <td>{{$sales->sales_by_type}}</td>

                                 <td>{{$sales->sales_customer_rating}}</td>
                                  <td>
                                    <a id="salesView" class="btn btn-add btn-sm pull-left m-r-5" href="/" data-sid="{{$sales->sales_id}}"><i class="fa fa-eye"></i></a>
                                    <a id="salesEdit" class="btn btn-warning btn-sm pull-left m-r-5" href="/" data-id="{{$sales->sales_id}}"><i class="fa fa-pencil"></i></a>
                                    {!! Form::open(['method'=>'post','url' => 'adminerpsalesdelete/{{$sales->sales_id}}','class'=>'pull-left','enctype'=>'multipart/form-data']) !!}
                                    {!! csrf_field() !!}
                                     <input type="hidden" name="sales_id" value="{{$sales->sales_id}}" >
                                     <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                                    {!! Form::close() !!}
                                  </td>
                              </tr>
                              @endforeach
                             </tbody>
                          </table>
                          {{ $allsales->links() }}
                       </div>
                    </div>
                 </div>
              </div>
           </div>


	    <!--  Includeed Files -->
      @include('backend.erp.sales.modal.salesadd')
      @include('backend.erp.sales.modal.salesedit')
      @include('backend.erp.sales.modal.salesview')
      @include('backend.erp.sales.modal.salessearchyear')
      @include('backend.erp.sales.modal.salessearchmonth')
      @include('backend.erp.sales.modal.salessearchday')

		</div>


  @endsection

  @section('script')
    <script type="text/javascript">

    // SEARCH YEAR
    $(document).on('click','#salessearchyearbutton', function(e){
      e.preventDefault();
      $('#salessearchyear').modal('show');
      $('#salessearchyear #sales_search_year').empty();
      $.get('adminerpsalesyear-json', function(data){
        $('#salessearchyear #sales_search_year').append('<option disabled selected>Select Year</option>');
        $.each(data.salesyears, function(index,value){
          $('#salessearchyear #sales_search_year').append('<option value="'+value+'">'+value+'</option>');
        });
      })
    });

    // SEARCH MONTH
    $(document).on('click','#salessearchmonthbutton', function(e){
      e.preventDefault();
      $('#salessearchmonth').modal('show');
      $('#salessearchmonth #sales_search_month').empty();
      $.get('adminerpsalesmonth-json', function(data){
        $('#salessearchmonth #sales_search_month').append('<option disabled selected>Select Month</option>');
        $.each(data.salesmonths, function(index,value){
          $('#salessearchmonth #sales_search_month').append('<option value="'+value+'">'+value+'</option>');
        });
      })
    });

    // SEARCH DAY
    $(document).on('click','#salessearchdaybutton', function(e){
      e.preventDefault();
      $('#salessearchday').modal('show');
      $('#salessearchday #sales_search_day').empty();
      $.get('adminerpsalesday-json', function(data){
        $('#salessearchday #sales_search_day').append('<option disabled selected>Select Day</option>');
        $.each(data.salesdays, function(index,value){
          $('#salessearchday #sales_search_day').append('<option value="'+value+'">'+value+'</option>');
        });
      })
    });


    // RATING JQUERY PLUGIN
      $(function () {
        $("#addcustomerrating").rateYo().on("rateyo.set", function (e, data) {
          $("#sales_customer_rating").val(data.rating);
        });
      });

    // SCRIPT FOR MODAL
      $(document).on('click','#salesEdit', function(e){
        e.preventDefault();
        $('#salesedit').modal('show');
        var cid = $(this).data('id');
        $('#salesedit form').attr("action", 'adminerpsalesupdate/'+cid);
        $.get('adminerpsalesedit/'+cid, function(data){
          $('#salesedit #sales_item_type').val(data.salesdata.sales_item_type);
          $('#salesedit #sales_item_name').val(data.salesdata.sales_item_name);
          $('#salesedit #sales_sku').val(data.salesdata.sales_sku);
          $('#salesedit #payment_type').val(data.salesdata.payment_type);
          $('#salesedit #payment_method').val(data.salesdata.payment_method);
          $('#salesedit #payment_info').val(data.salesdata.payment_info);
          $('#salesedit #sales_price').val(data.salesdata.sales_price);
          $('#salesedit #sales_date #minMaxExample2').val(data.salesdata.sales_date);
          $('#salesedit #sales_customer_id').find("option[value='" + data.salesdata.sales_customer_id + "']").attr('selected', true);
          $('#salesedit #sales_by_type').val(data.salesdata.sales_by_type);
          $('#salesedit #commision_type').val(data.salesdata.commision_type);
          $('#salesedit #commision_rate').val(data.salesdata.commision_rate);

          var seller_type_default = data.salesdata.sales_by_type;
          var seller_id_default = data.salesdata.sales_by_id;
          var selected;
          $.get('adminerpsellertype-json?sellertype='+seller_type_default, function(data){
            if (seller_type_default == 'Employee') {
              $('#salesedit #sales_by_id').empty();
              $.each(data.sellername, function(index, value){
                if (seller_id_default == value.employee_id) {
                   selected = 'selected';
                }else{
                  selected = '';
                }
                $('#salesedit #sales_by_id').append('<option value="'+value.employee_id+'" '+selected+'>'+value.employee_name+'</option>');
              });
            } else if (seller_type_default == 'Agent') {
              $('#salesedit #sales_by_id').empty();
              $.each(data.sellername, function(index, value){
                if (seller_id_default == value.id) {
                   selected = 'selected';
                }else{
                  selected = '';
                }
                $('#salesedit #sales_by_id').append('<option value="'+value.id+'" '+selected+'>'+value.name+'</option>');
              });
            }
          });

          $('#salesedit #sales_customer_ratingedit').val(data.salesdata.sales_customer_rating);
          var $editcustomerrating = $("#editcustomerrating").rateYo();
          $editcustomerrating.rateYo("rating", data.salesdata.sales_customer_rating);
          $("#editcustomerrating").rateYo().on("rateyo.set", function (e, data) {
            $("#sales_customer_ratingedit").val(data.rating);
          });

          // console.log(data.salesdata.sales_by_id);

        });

      });

      $(document).on('click','#salesView', function(e){
        e.preventDefault();
        $('#salesview').modal('show');
        var cid = $(this).data('sid');
        $.get('adminerpsalesview/'+cid, function(data){
          $('#salesview #sales_item_type').html(data.salesdetails.sales_item_type);
          $('#salesview #sales_item_name').html(data.salesdetails.sales_item_name);
          $('#salesview #payment_type').html(data.salesdetails.payment_type);
          $('#salesview #payment_method').html(data.salesdetails.payment_method);
          $('#salesview #payment_info').html(data.salesdetails.payment_info);
          $('#salesview #sales_sku').html(data.salesdetails.sales_sku);
          $('#salesview #sales_price').html(data.salesdetails.sales_price);
          $('#salesview #sales_date').html(data.salesdetails.sales_date);
          $('#salesview #sales_customer_id').html(data.salesdetails.customer.customer_name);
          $('#salesview #sales_by_type').html(data.salesdetails.sales_by_type);
          if (data.salesdetails.selleragent) {
            $('#salesview #sales_by_id').html(data.salesdetails.selleragent.name);
          }else if (data.salesdetails.selleremployee) {
            $('#salesview #sales_by_id').html(data.salesdetails.selleremployee.employee_name);
          }

          $('#salesview #commision_type').html(data.salesdetails.commision_type);
          $('#salesview #commision_rate').html(data.salesdetails.commision_rate);

          var $viewcustomerrating = $("#viewcustomerrating").rateYo();
          $viewcustomerrating.rateYo("rating", data.salesdetails.sales_customer_rating);
          $viewcustomerrating.rateYo("option", "readOnly", true);
          $viewcustomerrating.rateYo("option", "starWidth", "30px");

          // console.log(data.salesdetails);

        });
      });


    // SALER TYPE DROPDOWN SELECT
        $(document).on('change','#sellerTypeDropDown', function(e){

          var seller_type = e.target.value;

          $.get('adminerpsellertype-json?sellertype='+seller_type, function(data){

            if (data.sellertype == 'employee') {

              $('#sellerTypeNameDropDown').empty();
              $('#sellerTypeNameDropDown').append('<option disabled selected>Select Employee Name</option>');

              $.each(data.sellername, function(index, value){
                $('#sellerTypeNameDropDown').append('<option value="'+value.employee_id+'">'+value.employee_name+'</option>');
              });

            } else if (data.sellertype = 'agent') {

              $('#sellerTypeNameDropDown').empty();
              $('#sellerTypeNameDropDown').append('<option disabled selected>Select Agent Name</option>');

              $.each(data.sellername, function(index, value){
                $('#sellerTypeNameDropDown').append('<option value="'+value.id+'">'+value.name+'</option>');
              });

            }

          });
        });

        $(document).on('change','#sales_by_type', function(e){

          var seller_type = e.target.value;

          $.get('adminerpsellertype-json?sellertype='+seller_type, function(data){

            if (data.sellertype == 'employee') {

              $('#salesedit #sales_by_id').empty();
              $('#salesedit #sales_by_id').append('<option disabled selected>Select Employee Name</option>');

              $.each(data.sellername, function(index, value){
                $('#salesedit #sales_by_id').append('<option value="'+value.employee_id+'">'+value.employee_name+'</option>');
              });

            } else if (data.sellertype = 'agent') {

              $('#salesedit #sales_by_id').empty();
              $('#salesedit #sales_by_id').append('<option disabled selected>Select Agent Name</option>');

              $.each(data.sellername, function(index, value){
                $('#salesedit #sales_by_id').append('<option value="'+value.id+'">'+value.name+'</option>');
              });

            }

          });
        });

    </script>
  @endsection
