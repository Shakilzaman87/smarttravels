@extends('frontend.app')

@section('title', 'Employee Register')

@section('body')
	<!--DASHBOARD-->
	<section>
		<div class="tr-register">
			<div class="tr-regi-form">
				<h4>Create an Account</h4>
				<p>Enter all credentials for create your account.</p>
				<form class="col s12" method="post" action="{{url('employeeregister')}}">
					{{csrf_field()}}
					<input type="hidden" name="status" value="1">
					<div class="row">
						<div class="input-field col m6 s12">
							<input type="text" name="name" class="validate">
							<label>First Name</label>
						</div>
						<div class="input-field col m6 s12">
							<input type="text" name="employee_designation" class="validate">
							<label>Designation</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="number" name="employee_phone" class="validate">
							<label>Mobile</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="email" name="email" class="validate">
							<label>Email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="password" name="password" class="validate">
							<label>Password</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="password" class="validate">
							<label>Confirm Password</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="submit" value="submit" class="waves-effect waves-light btn-large full-btn"> </div>
					</div>
				</form>
				<p>Are you a already member ? <a href="{{url('/employeelogin')}}">Click to Login</a>
				</p>
			</div>
		</div>
	</section>
	<!--END DASHBOARD-->
@endsection
