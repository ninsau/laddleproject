<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use AUTH;
use DB;
use App\Http\Controllers\Controller;
use App\Notifications\RequestAdded;
use Notification;


class MakeRequestController extends Controller
{

  public function index()
  {
      return view('welcome');
  }

public function makerequest(Request $request)
{
  $request->validate([
   'email' => 'required:max:255',
   'title' => 'required:max:255'
 ]);

$title = $request->post('title');
$email = $request->post('email');
$file = $request->file;

$filePath = $file->store('requests','public');

\DB::table('requests')->insertGetId([
  'email' => $email,
  'title' => $title,
  'item' => $filePath
]);

Notification::route('mail', $email)->notify(new RequestAdded($email));

return view('welcome');

}
}
