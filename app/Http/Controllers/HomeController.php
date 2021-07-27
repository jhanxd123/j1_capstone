<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dashbTitle = "Dashboard";
        return view('home')->with('dashbTitle', $dashbTitle);
    }
    
    public function generate_qr_code()
    {
        $dashbTitle = "Generate Passenger's QR Code";
        return view('pages.generate_qr')->with('dashbTitle', $dashbTitle);;
    }

    public function profile_dispatcher()
    {
        $dashbTitle = "Dispatcher's Profile";
        return view('pages.profile_dispatcher')->with('dashbTitle', $dashbTitle);;
    }

    public function profile_vehicle()
    {
        $dashbTitle = "Vehicle's Profile";
        return view('pages.profile_vehicle')->with('dashbTitle', $dashbTitle);;
    }

    public function account_dispatcher()
    {
        $dashbTitle = "Dispatcher's Profile";
        return view('pages.profile_dispatcher')->with('dashbTitle', $dashbTitle);;
    }

    public function try()
    {
        $dashbTitle = "Dispatcher's Profile";
        return view('pages.try')->with('dashbTitle', $dashbTitle);;
    }
}
