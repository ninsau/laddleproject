<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{


  public function index()
  {
      return view('contact');
  }

  public function contact(Request $request)
  {
     $request->validate([
      'fromname' => 'required:max:255',
      'email' => 'required:max:255',
      'subject' => 'required:max:255',
      'tel' => 'required',
      'message' => 'required'
    ]);

    $fromname = $request->post('fromname');
    $email = $request->post('email');
    $subject = $request->post('subject');
    $message = $request->post('message');
    $tel = $request->post('tel');

    \DB::table('contact')->insertGetId([
      'fromname' => $fromname,
      'message' => $message,
      'email' => $email,
      'subject' => $subject,
      'tel' => $tel
    ]);

    return back()->with('message1', 'Your message has been delivered successfully');
  }
}
