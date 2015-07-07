<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home.index');
	}
        
        public function about()
	{
		return view('home.about');
	}
        
        public function services()
	{
		return view('home.services');
	}
        
        public function portolio()
	{
		return view('home.portolio');
	}
        
        public function contact()
	{
		return view('home.contact');
	}
        
        public function straps()
	{
		//return view('home.about');
	}
        
        public function tapes()
	{
		//return view('home.about');
	}
        
        public function news()
	{
		return view('home.news');
	}
        
        public function pricing()
	{
		return view('home.pricing');
	}

}
