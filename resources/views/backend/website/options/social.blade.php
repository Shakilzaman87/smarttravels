@extends('backend.app')

@section('title', 'Admin Website Pages')

@section('body')


         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-facebook-f"></i>
               </div>
               <div class="header-title">
                  <h1>Social</h1>
                  <small></small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
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
                        </div>

                        <div class="panel-body">

						   {!! Form::open(['method'=>'post','url' => 'adminwebsiteoptionssocialsave','class'=>'col-sm-6','enctype'=>'multipart/form-data']) !!}
                               {!! csrf_field() !!}

							  <div class="form-group">
                                 <label>Facebook</label>
                                  <input type="text" name="social_facebook" class="form-control" value="{{$current_option->social_facebook}}">
                              </div>

							   <div class="form-group">
                                 <label>Twitter</label>
                                  <input type="text" name="social_twitter" class="form-control" value="{{$current_option->social_twitter}}">
                              </div>

							   <div class="form-group">
                                 <label>Google Plus</label>
                                  <input type="text" name="social_google" class="form-control" value="{{$current_option->social_google}}">
                              </div>

							   <div class="form-group">
                                 <label>Linked In</label>
                                  <input type="text" name="social_linkedin" class="form-control" value="{{$current_option->social_linkedin}}">
                              </div>

							   <div class="form-group">
                                 <label>Youtube</label>
                                  <input type="text" name="social_youtube" class="form-control" value="{{$current_option->social_youtube}}">
                              </div>

                              <div class="form-group">
							  <input type="submit" value="Save" class="btn btn-success" >
							   </div>
                            {!! Form::close() !!}


						  </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->




  @endsection
