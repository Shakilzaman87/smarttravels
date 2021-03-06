<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>@yield('title')</title>
      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
      <!-- Start Global Mandatory Style

	    =====================================================================-->
	    <!-- Rateyo -->
      <link href="{{URL::asset('assets/backend/assets/rateyo/jquery.rateyo.min.css')}}" rel="stylesheet">
	    <!-- Select2 -->
	    <link href="{{URL::asset('assets/backend/assets/plugins/select2/select2.css')}}" rel="stylesheet" type="text/css"/>
	    <!-- jquery-ui css -->
	    <link href="{{URL::asset('assets/backend/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap -->
      <link href="{{URL::asset('assets/backend/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap rtl -->
      <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
      <!-- Lobipanel css -->
      <link href="{{URL::asset('assets/backend/assets/plugins/lobipanel/lobipanel.min.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Pace css -->
      <link href="{{URL::asset('assets/backend/assets/plugins/pace/flash.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Font Awesome -->
      <link href="{{URL::asset('assets/backend/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Pe-icon -->
      <link href="{{URL::asset('assets/backend/assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Themify icons -->
      <link href="{{URL::asset('assets/backend/assets/themify-icons/themify-icons.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Date -->

	  <!-- End Global Mandatory Style

         =====================================================================-->
      <!-- Start page Label Plugins
         =====================================================================-->
      <!-- Emojionearea -->
      <link href="{{URL::asset('assets/backend/assets/plugins/emojionearea/emojionearea.min.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Monthly css -->
      <link href="{{URL::asset('assets/backend/assets/plugins/monthly/monthly.css')}}" rel="stylesheet" type="text/css"/>
      <link href="{{URL::asset('assets/backend/assets/plugins/summernote/summernote.css')}}" rel="stylesheet" type="text/css"/>
      <!-- End page Label Plugins
         =====================================================================-->
      <!-- Start Theme Layout Style
         =====================================================================-->
      <!-- Theme style -->
      <link href="{{URL::asset('assets/backend/assets/dist/css/stylecrm.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Theme style rtl -->
      <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
      <!-- End Theme Layout Style
         =====================================================================-->
   </head>
   <body class="hold-transition sidebar-mini">
      <!--preloader-->
      <div id="preloader">
         <div id="status"></div>
      </div>
      <!-- Site wrapper -->
      <div class="wrapper">
         <header class="main-header">
            <a href="index.html" class="logo">
               <!-- Logo -->
               <span class="logo-mini">
               <img src="../assets/dist/img/mini-logo.png" alt="">
               </span>
               <span class="logo-lg">
               <img src="../assets/dist/img/smartlogo.png" alt="">
               </span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                  <!-- Sidebar toggle button-->
                  <span class="sr-only">Toggle navigation</span>
                  <span class="pe-7s-angle-left-circle"></span>
               </a>
               <!-- searchbar-->


             <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                     <!-- Orders -->
                     <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle admin-notification" data-toggle="dropdown" style="display:none">
                        <i class="pe-7s-cart"></i>
                        <span class="label label-primary">5</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <ul class="menu">
                                 <li >
                                    <!-- start Orders -->
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/basketball-jersey.png" class="img-thumbnail" alt="User Image">
                                       </div>
                                       <h4>polo shirt</h4>
                                       <p><strong>total item:</strong> 21
                                       </p>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/shirt.png" class="img-thumbnail" alt="User Image">
                                       </div>
                                       <h4>Kits</h4>
                                       <p><strong>total item:</strong> 11
                                       </p>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/football.png" class="img-thumbnail" alt="User Image">
                                       </div>
                                       <h4>Football</h4>
                                       <p><strong>total item:</strong> 16
                                       </p>
                                    </a>
                                 </li>
                                 <li class="nav-list">
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/shoe.png" class="img-thumbnail" alt="User Image">
                                       </div>
                                       <h4>Sports sheos</h4>
                                       <p><strong>total item:</strong> 10
                                       </p>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <!-- Messages -->
                     <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="display:none">
                        <i class="pe-7s-mail"></i>
                        <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <ul class="menu">
                                 <li>
                                    <!-- start message -->
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/avatar.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Ronaldo</h4>
                                       <p>Please oreder 10 pices of kits..</p>
                                       <span class="badge badge-success badge-massege"><small>15 hours ago</small>
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/avatar2.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Leo messi</h4>
                                       <p>Please oreder 10 pices of Sheos..</p>
                                       <span class="badge badge-info badge-massege"><small>6 days ago</small>
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left" >
                                          <img src="assets/dist/img/avatar3.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Modric</h4>
                                       <p>Please oreder 6 pices of bats..</p>
                                       <span class="badge badge-info badge-massege"><small>1 hour ago</small>
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/avatar4.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Salman</h4>
                                       <p>Hello i want 4 uefa footballs</p>
                                       <span class="badge badge-danger badge-massege">
                                       <small>6 days ago</small>
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Sergio Ramos</h4>
                                       <p>Hello i want 9 uefa footballs</p>
                                       <span class="badge badge-info badge-massege"><small>5 hours ago</small>
                                       </span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <!-- Notifications -->
                     <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="display:none">
                        <i class="pe-7s-bell"></i>
                        <span class="label label-warning">7</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <ul class="menu">
                                 <li>
                                    <a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-green"></i>Change Your font style</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-red"></i>
                                    check the system ststus..</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-yellow"></i>
                                    Add more admin...</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-violet"></i> Add more clients and order</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-yellow"></i>
                                    Add more admin...</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-violet"></i> Add more clients and order</a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <!-- Tasks -->
                     <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="display:none">
                        <i class="pe-7s-note2"></i>
                        <span class="label label-danger">6</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <ul class="menu">
                                 <li>
                                    <!-- Task item -->
                                    <a href="#" class="border-gray">
                                       <span class="label label-success pull-right">50%</span>
                                       <h3><i class="fa fa-check-circle"></i> Theme color should be change</h3>
                                    </a>
                                 </li>
                                 <!-- end task item -->
                                 <li>
                                    <!-- Task item -->
                                    <a href="#" class="border-gray">
                                       <span class="label label-warning pull-right">90%</span>
                                       <h3><i class="fa fa-check-circle"></i> Fix Error and bugs</h3>
                                    </a>
                                 </li>
                                 <!-- end task item -->
                                 <li>
                                    <!-- Task item -->
                                    <a href="#" class="border-gray">
                                       <span class="label label-danger pull-right">80%</span>
                                       <h3><i class="fa fa-check-circle"></i> Sidebar color change</h3>
                                    </a>
                                 </li>
                                 <!-- end task item -->
                                 <li>
                                    <!-- Task item -->
                                    <a href="#" class="border-gray">
                                       <span class="label label-info pull-right">30%</span>
                                       <h3><i class="fa fa-check-circle"></i> font-family should be change</h3>
                                    </a>
                                 </li>
                                 <li>
                                    <!-- Task item -->
                                    <a href="#"  class="border-gray">
                                       <span class="label label-success pull-right">60%</span>
                                       <h3><i class="fa fa-check-circle"></i> Fix the database Error</h3>
                                    </a>
                                 </li>
                                 <li>
                                    <!-- Task item -->
                                    <a href="#"  class="border-gray">
                                       <span class="label label-info pull-right">20%</span>
                                       <h3><i class="fa fa-check-circle"></i> data table data missing</h3>
                                    </a>
                                 </li>
                                 <!-- end task item -->
                              </ul>
                           </li>
                        </ul>
                     </li>

                     <!-- user -->
                     <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          @if(Auth::user()->image)
                          <img src="{{ URL::to('/') }}/public/backendimages/{{Auth::user()->image}}" class="img-circle" width="45" height="45" alt="user">
                          @else
                          <img src="{{ URL::to('/') }}/public/backendimages/admin_dafault.png" class="img-circle" width="45" height="45" alt="user">
                          @endif

                        </a>
                        <ul class="dropdown-menu" >
                           <li>
                              <a href="{{url('adminprofilesettings')}}">
                              <i class="fa fa-user"></i> {{Auth::user()->name}}</a>
                           </li>
                           <li><a href="#"><i class="fa fa-inbox"></i> Inbox</a></li>
                           <li>
						   <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa-sign-out"></i>Logout</a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
						   </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>
         <!-- =============================================== -->
         <!-- Left side column. contains the sidebar -->
         <aside class="main-sidebar">
            <!-- sidebar -->
            <div class="sidebar">
               <!-- sidebar menu -->
               <ul class="sidebar-menu">
                  <li class="active">
                     <a href="{{url('/admindashboard')}}"><i class="fa fa-tachometer"></i><span>Dashboard</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
				  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-desktop"></i><span>Website Manager</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{url('/adminwebsitetourpackages')}}">Tours Packages</a></li>
                        <li><a href="{{url('/adminwebsitehotels')}}">Hotels</a></li>
                        <li><a href="{{url('/adminwebsitesights')}}">Sight Seeing</a></li>
                        <li><a href="{{url('/adminwebsiteattractions')}}">Attraction Tickets</a></li>
                        <li><a href="{{url('/adminwebsitevisarequirements')}}">Visa</a></li>

                     </ul>
                  </li>
				  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-address-card"></i><span>Bookings</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{url('/adminwebsitetourbooking')}}">Tour</a></li>
                        <li><a href="{{url('/adminwebsitehotelbooking')}}">Hotel</a></li>
                        <li><a href="{{url('/adminwebsitesightbooking')}}">Sight</a></li>
                        <li><a href="{{url('/adminwebsiteattractionbooking')}}">Attraction Tickets</a></li>
                        <li><a href="{{url('/adminwebsiteairticketbooking')}}">Air Ticket</a></li>
                        <li><a href="{{url('/adminwebsitevisabooking')}}">Visa</a></li>
                     </ul>
                  </li>
				  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-globe"></i><span>Country & Location</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
						<li><a href="{{url('/admincountry')}}">Country</a></li>
                        <li><a href="{{url('/adminlocation')}}">Location</a></li>

                     </ul>
                  </li>


				  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-cogs"></i><span>Theme Options</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{url('/adminwebsiteoptionslogo')}}">Logo</a></li>
                        <li><a href="{{url('/adminwebsiteoptionsfavicon')}}">Favicon</a></li>
                        <li><a href="{{url('/adminwebsiteoptionsemail')}}">Email</a></li>
                        <li><a href="{{url('/adminwebsiteoptionsaddress')}}">Address</a></li>
                        <li><a href="{{url('/adminwebsiteoptionsmobile')}}">Mobile</a></li>
                        <li><a href="{{url('/adminwebsiteoptionscopyright')}}">Copyright</a></li>
                        <li><a href="{{url('/adminwebsiteoptionssocial')}}">Social</a></li>
                        <li><a href="{{url('/adminwebsiteoptionspagebanner')}}">Page Banner</a></li>
                        <li><a href="{{url('/adminwebsiteoptionscurrency')}}">Currency</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-users"></i><span>Customers</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{url('/adminerpcustomer')}}">Customer List</a></li>
                     </ul>
                  </li>

                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-shopping-cart"></i><span>Sales</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{url('/adminerpsales')}}">Sales List</a></li>                      
                     </ul>
                  </li>

                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-clipboard"></i><span>Task</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{url('/adminerptask')}}">Task List</a></li>
                     </ul>
                  </li>

                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-user-circle"></i><span>Employee</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{url('/adminerpemployee')}}">Employees</a></li>
                        <li><a href="{{url('/adminerpemployeeattendence')}}"> Attendence</a></li>
                        <li><a href="{{url('/adminerpagent')}}">Agents</a></li>
                        <li><a href="{{url('/adminerpemployeeannouncement')}}">Announcements</a></li>
                     </ul>
                  </li>

                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-calculator"></i><span>Accounts</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{url('/adminerpexpenses')}}">Expenses</a></li>
                        <li><a href="{{url('/adminerpincome')}}">Income</a></li>
                        <li><a href="{{url('/adminerpinexreport')}}">Income Expense Report</a></li>
                     </ul>
                  </li>

                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-comments"></i><span>Customer Support</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{url('/customermessages')}}">All Messages</a></li>
                     </ul>
                  </li>

                  <li class="treeview">
                     <a href="{{url('/adminprofilesettings')}}">
                     <i class="fa fa-gear"></i>
                     <span>Settings</span>
                     </a>
                  </li>

               </ul>
            </div>
            <!-- /.sidebar -->
         </aside>

 @section('body')

 @show

 <footer class="main-footer">
            <strong>Copyright &copy; 2016-2017 <a href="#">Smart Web</a>.</strong> All rights reserved.
         </footer>
      </div>
      <!-- /.wrapper -->
      <!-- Start Core Plugins
         =====================================================================-->
      <!-- jQuery -->
      <script src="{{URL::asset('assets/backend/assets/plugins/jQuery/jquery-1.12.4.min.js')}}" type="text/javascript"></script>
      <!-- jquery-ui -->
      <script src="{{URL::asset('assets/backend/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js')}}" type="text/javascript"></script>
      <!-- Bootstrap -->
      <script src="{{URL::asset('assets/backend/assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
	  <!-- Rateyo -->
      <script src="{{URL::asset('assets/backend/assets/rateyo/jquery.rateyo.min.js')}}"></script>
	  <!-- Select2 -->
      <script src="{{URL::asset('assets/backend/assets/plugins/select2/select2.min.js')}}" type="text/javascript"></script>
      <!-- lobipanel -->
      <script src="{{URL::asset('assets/backend/assets/plugins/lobipanel/lobipanel.min.js')}}" type="text/javascript"></script>
      <!-- Pace js -->
      <script src="{{URL::asset('assets/backend/assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
      <!-- SlimScroll -->
      <script src="{{URL::asset('assets/backend/assets/plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript">    </script>
      <!-- FastClick -->
      <script src="{{URL::asset('assets/backend/assets/plugins/fastclick/fastclick.min.js')}}" type="text/javascript"></script>
      <!-- CRMadmin frame -->
      <script src="{{URL::asset('assets/backend/assets/dist/js/custom.js')}}" type="text/javascript"></script>
      <!-- End Core Plugins
         =====================================================================-->
      <!-- Start Page Lavel Plugins
         =====================================================================-->
      <!-- ChartJs JavaScript -->
      <script src="{{URL::asset('assets/backend/assets/plugins/chartJs/Chart.min.js')}}" type="text/javascript"></script>
      <!-- Counter js -->
      <script src="{{URL::asset('assets/backend/assets/plugins/counterup/waypoints.js')}}" type="text/javascript"></script>
      <script src="{{URL::asset('assets/backend/assets/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
      <!-- Monthly js -->
      <script src="{{URL::asset('assets/backend/assets/plugins/monthly/monthly.js')}}" type="text/javascript"></script>
      <script src="{{URL::asset('assets/backend/assets/plugins/summernote/summernote.js')}}" type="text/javascript"></script>
      <!-- End Page Lavel Plugins
         =====================================================================-->
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
      <script src="{{URL::asset('assets/backend/assets/dist/js/dashboard.js')}}" type="text/javascript"></script>
      <!-- End Theme label Script
         =====================================================================-->

		<script>
		$(document).ready(function() {
			$('.js-example-basic-multiple').select2();
		});
		</script>


		 <script>
			$(document).ready(function() {
				$('#summernote').summernote({
					width: 500,
					height: 300,

				});
			});

			var postForm = function() {
				var content = $('textarea[name="hotel_details"]').html($('#summernote').code());
			}
		  </script>

      <script>
         function dash() {
         // single bar chart
         var ctx = document.getElementById("singelBarChart");
         var myChart = new Chart(ctx, {
         type: 'bar',
         data: {
         labels: ["Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat"],
         datasets: [
         {
         label: "My First dataset",
         data: [40, 55, 75, 81, 56, 55, 40],
         borderColor: "rgba(0, 150, 136, 0.8)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(0, 150, 136, 0.8)"
         }
         ]
         },
         options: {
         scales: {
         yAxes: [{
             ticks: {
                 beginAtZero: true
             }
         }]
         }
         }
         });
               //monthly calender
               $('#m_calendar').monthly({
                 mode: 'event',
                 //jsonUrl: 'events.json',
                 //dataType: 'json'
                 xmlUrl: 'events.xml'
             });

         //bar chart
         var ctx = document.getElementById("barChart");
         var myChart = new Chart(ctx, {
         type: 'bar',
         data: {
         labels: ["January", "February", "March", "April", "May", "June", "July", "august", "september","october", "Nobemver", "December"],
         datasets: [
         {
         label: "My First dataset",
         data: [65, 59, 80, 81, 56, 55, 40, 65, 59, 80, 81, 56],
         borderColor: "rgba(0, 150, 136, 0.8)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(0, 150, 136, 0.8)"
         },
         {
         label: "My Second dataset",
         data: [28, 48, 40, 19, 86, 27, 90, 28, 48, 40, 19, 86],
         borderColor: "rgba(51, 51, 51, 0.55)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(51, 51, 51, 0.55)"
         }
         ]
         },
         options: {
         scales: {
         yAxes: [{
             ticks: {
                 beginAtZero: true
             }
         }]
         }
         }
         });
             //counter
             $('.count-number').counterUp({
                 delay: 10,
                 time: 5000
             });
         }
         dash();
      </script>

      @yield('script')

   </body>

</html>
