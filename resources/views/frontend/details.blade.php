@extends('frontend.app')

@section('title', 'Tour Package')

@section('body')


<style>
.inner_banner{
background-image: url("{{ URL::to('/') }}/public/backendimages/{{$packageDetails->tour_image}}");
}
</style>

	<section>
		<div class="rows inner_banner">
			<div class="container">
				<h2><span>{{$packageDetails->package_name}} -</span> {{$packageDetails->general_package}}</h2>
				<ul>
					<li><a href="{{ URL::to('/') }}">Home</a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
					<li>{{$packageDetails->package_name}}
					</li>
				</ul>
				<p>Country: {{$packageDetails->country}}</p>
			</div>
		</div>
	</section>
	<!--====== TOUR DETAILS - BOOKING ==========-->
	<section>
		<div class="rows banner_book" id="inner-page-title">
			<div class="container">
				<div class="banner_book_1">
					<ul>
						<li class="dl1">Location : {{$packageDetails->location}}</li>
						<li class="dl2">
							Price : {{$packageDetails->price}}
							@if($optionscurrency)
								{{$optionscurrency->currency}}
							@endif
						</li>
						<li class="dl3">Duration : {{$packageDetails->duration}}</li>
						<li class="dl4"><a href="{{ URL::to('/tourbooking/')}}/{{$packageDetails->package_id }}">Book Now</a> </li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--====== TOUR DETAILS ==========-->
	<section>
		<div class="rows inn-page-bg com-colo">
			<div class="container inn-page-con-bg tb-space">
				<div class="col-md-9">
					<!--====== TOUR TITLE ==========-->
					<div class="tour_head">
						<h2>{{$packageDetails->package_name}}</h2> </div>
					<!--====== TOUR DESCRIPTION ==========-->
					<div class="tour_head1">
						<h3>Description</h3>
						<p>{!!$packageDetails->tour_details!!}</p>
					</div>

					<!--====== TOUR LOCATION ==========-->
					<div class="tour_head1 tout-map map-container">
						<h3>Location</h3>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290415.157581651!2d-93.99661009218904!3d39.661150926343694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1467884030780" allowfullscreen></iframe>
					</div>

					<!--====== TOUR Excluded==========-->
					<div class="tour_head1 hot-ameni">
						<h3>Tour Exclude</h3>
						<ul>
							<?php $tour_exclude = explode(',',$packageDetails->tour_exclude); ?>
							@foreach($tour_exclude as $te)
							<li><i class="fa fa-check" aria-hidden="true"></i> {{$te}} </li>
							@endforeach
						</ul>
					</div>

					<!--====== TOUR Included  ==========-->
					<div class="tour_head1 hot-ameni">
						<h3>Tour Include</h3>
						<ul>
							<?php $tour_included = explode(',',$packageDetails->tour_include); ?>
							@foreach($tour_included as $ti)
							<td class="event-res">{{$ti}}</td>
							@endforeach
						</ul>
					</div>


				</div>
				<div class="col-md-3 tour_r">
					<!--====== SPECIAL OFFERS ==========-->
					<div class="tour_right tour_offer">
						<div class="band1"><img src="images/offer.png" alt="" /> </div>
						<p>Special Offer</p>
						<h4>$500<span class="n-td">
								<span class="n-td-1">$800</span>
								</span>
							</h4> <a href="booking.html" class="link-btn">Book Now</a> </div>
					<!--====== TRIP INFORMATION ==========-->
					<div class="tour_right tour_incl tour-ri-com">
						<h3>Trip Information</h3>
						<ul>
							<li>Location : {{$packageDetails->location}}</li>
							<li>Arrival Date: {{$packageDetails->arrival_date}}</li>
							<li>Departure Date: {{$packageDetails->departure_date}}</li>
							<li>{{$packageDetails->main_package}}</li>
						</ul>
					</div>
					<!--====== PACKAGE SHARE ==========-->
					<div class="tour_right head_right tour_social tour-ri-com">
						<h3>Share This Package</h3>
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
							<li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
						</ul>
					</div>
					<!--====== HELP PACKAGE ==========-->
					<div class="tour_right head_right tour_help tour-ri-com">
						<h3>Help & Support</h3>
						<div class="tour_help_1">
							<h4 class="tour_help_1_call">Call Us Now</h4>
							<h4><i class="fa fa-phone" aria-hidden="true"></i> 10-800-123-000</h4> </div>
					</div>
					<!--====== PUPULAR TOUR PACKAGES ==========-->
					<div class="tour_right tour_rela tour-ri-com">
						<h3>Popular Packages</h3>
						<div class="tour_rela_1"> <img src="images/related1.png" alt="" />
							<h4>Dubai 7Days / 6Nights</h4>
							<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p> <a href="#" class="link-btn">View this Package</a> </div>
						<div class="tour_rela_1"> <img src="images/related2.png" alt="" />
							<h4>Mauritius 4Days / 3Nights</h4>
							<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p> <a href="#" class="link-btn">View this Package</a> </div>
						<div class="tour_rela_1"> <img src="images/related3.png" alt="" />
							<h4>India 14Days / 13Nights</h4>
							<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p> <a href="#" class="link-btn">View this Package</a> </div>
					</div>
				</div>
			</div>
		</div>
	</section>

  @endsection
