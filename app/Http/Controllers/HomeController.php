<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AUTH;
use DB;

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
        return view('home');
    }

    public function activity()
    {
      $email = Auth::user()->email;
      $activity = DB::table('sell_draft')->where('email', $email)->get();
      $clicks = DB::table('sell_draft')->where('email', $email)->sum('clicks');
      $sold = DB::table('sell_draft')->where('email', $email)->sum('sold');
      $earned = DB::table('sell_draft')->where('email', $email)->sum('earned');



        return view('home')->with('activities', $activity)
                           ->with('clicks', $clicks)
                           ->with('earned', $earned)
                           ->with('sold', $sold);
    }
}
