<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AUTH;
use DB;

class AdminController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      if(session('adminLogin')) {
        $users = DB::table('users')->orderBy('id', 'desc')->simplePaginate(5);
        $see = DB::table('payment')->orderBy('id','desc')->simplePaginate(5);
        $fetch = DB::table('payment')->orderBy('id','desc')->simplePaginate(5);

        foreach ($fetch as $id) {
          $idd = $id->identifier;
          $choose = DB::table('sell_draft')->where('identifier', $idd)->simplePaginate(5);
          foreach ($choose as $addr) {
            $email = $addr->email;
            $devs = DB::table('devpay')->where('email', $email)->simplePaginate(5);

            return view('admin.home')
            ->with('see', $see)
            ->with('users', $users)
            ->with('choose', $devs);
          }
        }

      }else {
        return view('admin.login');
      }
    }

    public function enter(Request $request)
    {
      $email = $request->post('email');
      $password = $request->post('password');

      if ($email=='admin@laddle.io'&&$password=='mainpassword') {
        session()->put('adminLogin', 'active');
        return redirect('/main');
      }else {
          return view('admin.login');
        };
      }
    }
