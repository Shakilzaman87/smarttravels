@extends('backend.app')

@section('title', 'Admin Website Pages')

@section('body')

<style>
.select2-container--default .select2-results__option[aria-selected="true"] {
    background-color: #009688;
	color:white;
}
</style>

         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-home"></i>
               </div>
               <div class="header-title">
                  <h1>Operator Hotel Prices</h1>
                  <small>List of all Hotel Prices</small>
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
                                 <h4>Hotel Price List</h4>

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
								<a class="btn btn-add" href="#" data-toggle="modal" data-target="#package" > <i class="fa fa-plus"></i> Add New Hotel Price </a>  
						   </div>
                              
                           </div>
                           <!-- ./Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>Country</th>
                                       <th>Location</th>
                                       <th>Rating</th>
                                       <th>Price</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
								    @foreach($operatorHotel as $hl)
                                    <tr>
                                       <td>{{$hl->country}}</td>
                                       <td>{{$hl->location}}</td>
                                       <td>{{$hl->rating}}</td>
                                       <td>{{$hl->price}}</td>
                                       <td>
										  <a class="btn btn-danger btn-sm" href="adminwebsiteoperatorhoteldelete/{{$hl->id}}"><i class="fa fa-trash-o"></i></a>
                                       </td>
                                    </tr>
									@endforeach
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>               
					
					
				    
			   
			    <!--  Add New Tour Package -->
                <div class="modal fade" id="package" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-plane m-r-5"></i> Add Hotel Price </h3>
                        </div>
                        
						<div class="modal-body">
                           <div class="row">
                               <div class="panel-body">
							   
							{!! Form::open(['method'=>'post','url' => 'adminwebsiteoperatorhotelsave','class'=>'col-sm-6','enctype'=>'multipart/form-data']) !!}   
                               {!! csrf_field() !!}
                              
							  <div class="form-group">
                                 <label>Country</label>
								 <select name="country" style="width:200px;" >
									@foreach($countryList as $cl)
									<option>{{$cl->country_name}}</option>
									@endforeach										  
								 </select>
                              </div>
                              <div class="form-group">
                                 <label>Locations</label>
                                 <select name="location" style="width:200px;">
									@foreach($locationList as $ll)
									<option>{{$ll->location_name}}</option>
									@endforeach								  
								 </select>
                              </div>
							  <div class="form-group">
                                 <label>Rating</label>
                                 <select class="form-control" name="rating">
									<option value="0" disabled selected>Select Rating</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>									
									<option>6</option>									
									<option>7</option>									
								  </select> 
							  </div>
								
                              <div class="form-group">
                                 <label>Price</label>
                                 <input type="text" name="price" class="form-control" placeholder="Enter Price" required>
                              </div>
							  
                              <div class="form-group">
							     <input type="submit" value="Save" class="btn btn-success" >
							  </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                  </div>
                  <!-- /.modal-dialog -->
               </div>
			 </div> 			 
            </div> 			
			
			
			 
			
		</div> 
		
		 
  @endsection    