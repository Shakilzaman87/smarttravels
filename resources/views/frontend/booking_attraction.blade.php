@extends('frontend.app')

@section('title', 'Booking')

@section('body')

<!--BOOKING-->
	<section>
		<div class="tr-register">
			<div class="tr-regi-form">
				<h4><span>Attraction Ticket</span> BOOKING</h4>

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

					{!! Form::open(['url' => 'attractionbookingsave','class'=>'col s12']) !!}
					<input type="hidden" name="service_id" value="{{request()->segment(2)}}" class="validate">
					<div class="row">
						<div class="input-field col m6 s12">
							<input type="text" name="name" class="validate" required>
							<label>Name</label>
						</div>
						<div class="input-field col m6 s12">
							<input type="number" name="mobile" class="validate" required>
							<label>Mobile</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col m12 s12">
							<input type="email" name="email" class="validate" required>
							<label>Email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col m6 s12">
							<input type="text" name="city" style="border: 1px solid #c9c9c9;" id="country" class="autocomplete" class="validate" required>
							<label>City</label>
						</div>
						<div class="input-field col m6 s12">
							<input type="text" name="country" style="border: 1px solid #c9c9c9;" id="city" class="autocomplete" class="validate" required>
							<label>Country</label>
						</div>
					</div>


					<div class="row">
						<div class="input-field col s12">
							<input type="submit" value="submit" class="waves-effect waves-light btn-large full-btn"> </div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</section>
	<!--END BOOKING-->
  @endsection
