<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AUTH;
use DB;

class DevPaymentController extends Controller
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
      $email = Auth::user()->email;
      $devpay = DB::table('devpay')->where('email', $email)->orderBy('id', 'desc')->limit(1)->get();

        return view('payment')->with('accounts', $devpay);
    }

    public function paydev(Request $request)
    {
      $request->validate([
       'momo' => 'required:max:255',
       'cashapp' => 'required:max:255'
     ]);

      $momo = $request->get('momo');
      $cashapp = $request->get('cashapp');

      $email = Auth::user()->email;
            DB::table('devpay')
                ->updateOrInsert(
                  ['email' => $email, 'momo' => $momo, 'cashapp' => $cashapp],
                  ['email' => $email]
                );



                return back()->with('message11', 'Payment Account Added Successfully.');
    }

}
