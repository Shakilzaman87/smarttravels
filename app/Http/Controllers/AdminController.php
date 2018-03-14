<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TourPackages;
use App\Options;
use Session;
use Image;
use DB;

use App\TourCountry;
use App\TourLocation;
use App\ErpTask;
use App\EmployeeLogin;
use App\ErpSales;

use Carbon\Carbon;

class AdminController extends Controller
{

  public function adminDashboard(){
    $tasks      = ErpTask::latest()->take(5)->get();
    $employees  = EmployeeLogin::all();
    $sales      = ErpSales::latest()->take(5)->get();
		return view('backend.dashboard',compact('tasks','employees','sales'));
	}

	public function adminWebsitePages(){
		return view('backend.website.website_pages');
	}

	public function adminWebsiteHome(){
		return view('backend.website.website_home');
	}

	public function adminLogin(){
		return view('backend.authentication.login');
	}

	public function logoOptions(){
		$current_option= Options::get()->first();
		return view('backend.website.options.logo',compact('current_option'));
	}

	public function logoOptionsSave(Request $request){
		$option_id = 1;
		$insert = Options::find($option_id);

		if($request->hasFile('logo')){
			$image = $request->file('logo');
			$filename = time().'.'.$image->getClientOriginalExtension();
			Image::make($image)->resize(145,131)->save(public_path('/backendimages/'.$filename));
			$insert->logo = $filename;
		}
		else{
			$filename = $insert->logo;
			$insert->logo = $filename;
		}

		$insert->save();
		Session::flash('flash_message_insert', 'Logo Updated Successfully !');
		return redirect()->back();
	}

	public function faviconOptions(){
		$current_option= Options::get()->first();
		return view('backend.website.options.favicon',compact('current_option'));
	}

	public function faviconOptionsSave(Request $request){
		$option_id = 1;
		$insert = Options::find($option_id);

		if($request->hasFile('favicon')){
			$image = $request->file('favicon');
			$filename = time().'.'.$image->getClientOriginalExtension();
			Image::make($image)->resize(32,32)->save(public_path('/backendimages/'.$filename));
			$insert->favicon = $filename;
		}
		else{
			$filename = $insert->favicon;
			$insert->favicon = $filename;
		}

		$insert->save();
		Session::flash('flash_message_insert', 'Favicon Updated Successfully !');
		return redirect()->back();
	}

	public function emailOptions(){
		$current_option= Options::get()->first();
		return view('backend.website.options.email',compact('current_option'));
	}

	public function emailOptionsSave(Request $request){
		$option_id = 1;
		$insert = Options::find($option_id);
		$insert->email = $request->input('email');

		$insert->save();
		Session::flash('flash_message_insert', 'Email Updated Successfully !');
		return redirect()->back();
	}

	public function addressOptions(){
		$current_option= Options::get()->first();
		return view('backend.website.options.address',compact('current_option'));
	}

	public function addressOptionsSave(Request $request){
		$option_id = 1;
		$insert = Options::find($option_id);
		$insert->address = $request->input('address');

		$insert->save();
		Session::flash('flash_message_insert', 'Address Updated Successfully !');
		return redirect()->back();
	}

	public function mobileOptions(){
		$current_option= Options::get()->first();
		return view('backend.website.options.mobile',compact('current_option'));
	}

	public function mobileOptionsSave(Request $request){
		$option_id = 1;
		$insert = Options::find($option_id);
		$insert->mobile = $request->input('mobile');

		$insert->save();
		Session::flash('flash_message_insert', 'Mobile Updated Successfully !');
		return redirect()->back();
	}

	public function copyrightOptions(){
		$current_option= Options::get()->first();
		return view('backend.website.options.copyright',compact('current_option'));
	}

	public function copyrightOptionsSave(Request $request){
		$option_id = 1;
		$insert = Options::find($option_id);
		$insert->copyright = $request->input('copyright');

		$insert->save();
		Session::flash('flash_message_insert', 'Copyright Updated Successfully !');
		return redirect()->back();
	}

	public function socialOptions(){
		$current_option= Options::get()->first();
		return view('backend.website.options.social',compact('current_option'));
	}

	public function socialOptionsSave(Request $request){
		$option_id = 1;
		$insert = Options::find($option_id);

		$insert->social_facebook = $request->input('social_facebook');
		$insert->social_twitter = $request->input('social_twitter');
		$insert->social_google = $request->input('social_google');
		$insert->social_linkedin = $request->input('social_linkedin');
		$insert->social_youtube = $request->input('social_youtube');

		$insert->save();
		Session::flash('flash_message_insert', 'Social Updated Successfully !');
		return redirect()->back();
	}

	public function adminCountry(){
		$countries = TourCountry::latest()->paginate(10);

		return view('backend.website.country_location.country',compact('countries'));
	}

	public function editCountry($id){
		$country = TourCountry::find($id);
		return response()->json(['country'=>$country]);
	}

	public function updateCountry(Request $request,$id){
		$country = TourCountry::find($id);
		$country->country_name = $request->country_name;
		$country->save();
		return back();
	}

	public function deleteCountry(Request $request){
		$country_id = $request->input('country_id');
		$country = TourCountry::find($country_id);
		$country->locations()->delete();
		$country->delete();
        Session::flash('flash_message_delete', 'Country Deleted !');
		return back();
	}

	public function adminLocation(){
		$locations = TourLocation::latest()->paginate(10);
		$countryList = TourCountry::get();

		return view('backend.website.country_location.location',compact('locations','countryList'));
	}

	public function editLocation($id){
		$location = TourLocation::find($id);
		return response()->json(['location'=>$location]);
	}

	public function updateLocation(Request $request,$id){
		$location = TourLocation::find($id);
		$location->country_id = $request->country_id;
		$location->location_name = $request->location_name;
		$location->save();
		return back();
	}

	public function deleteLocation(Request $request){
		$location_id = $request->input('location_id');
		TourLocation::find($location_id)->delete();
        Session::flash('flash_message_delete', 'Location Deleted !');
		return redirect()->back();
	}

  // Month Expense and Income
  public function adminMonthlyExpanse(){

    $expenses = array();
    $incomes  = array();
    for ($i=1; $i <= 12; $i++) {
      $expenses[] = DB::table("erp_expenses")->whereMonth('expense_date', '=', $i)->sum('expense_amount');
      $incomes[]  = DB::table("erp_sales")->whereMonth('sales_date', '=', $i)->sum('sales_price');
    }

    return response()->json([
      'expenses'  => $expenses,
      'incomes'   => $incomes
    ]);

  }

  // Weekly Expense and Income
  public function adminWeeklyExpanse(){

    $start = Carbon::now()->subWeeks(1);
    $end   = Carbon::now()->subDays(1);
    $days  = $start->diff($end)->days;

    $expenses = array();
    $incomes  = array();
    $daysname = array();
    $daysweek = array();

    for ($i = 0; $i <= $days; $i++) {
        $date       = '';
        $date       = $start->addDays(1);
        $daysname[] = $date->format('D');
        $daysweek[] = $date->format('Y-m-j');
    }

    foreach ($daysweek as $day) {
      $expenses[] = DB::table("erp_expenses")->whereDate('expense_date', '=', $day)->sum('expense_amount');
      $incomes[]  = DB::table("erp_sales")->whereDate('sales_date', '=', $day)->sum('sales_price');
    }

    return response()->json([
      'expenses'  => $expenses,
      'incomes'   => $incomes,
      'sevendays' => $daysname
    ]);

  }

  // Monthly Sales
  public function adminMonthlySales(){

    $start = Carbon::now()->startOfMonth();
    $end   = Carbon::now();
    $days  = $start->diff($end)->days;

    $incomes  = array();
    $dayssell = array();

    for ($i = 0; $i <= $days; $i++) {
        $date       = $start;
        $dayssell[] = $date->format('Y-m-j');
        $date       = $start->addDays(1);
    }

    foreach ($dayssell as $day) {
      $incomes[]  = DB::table("erp_sales")->whereDate('sales_date', '=', $day)->sum('sales_price');
    }

    return response()->json([
      'incomes'     => $incomes,
      'daysofmonth' => $dayssell
    ]);

  }



}
