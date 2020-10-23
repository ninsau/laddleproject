<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use AUTH;
use DB;
use App\Http\Controllers\Controller;


class EnlistController extends Controller
{

  public function index()
  {
      return view('jobs');
  }

public function enlist(Request $request)
{
  $request->validate([
    'name' => 'required:max:255',
   'email' => 'required:max:255',
   'phone' => 'required:max:255',
   'location' => 'required:max:255',
   'salary' => 'required:max:255',
   'describe' => 'required:max:2555',
   'extra' => 'required:max:255'

 ]);

$name = $request->post('name');
$email = $request->post('email');
$phone = $request->post('phone');
$location = $request->post('location');
$salary = $request->post('salary');
$describe = $request->post('describe');
$extra = $request->post('extra');


$file = $request->file;

$filePath = $file->store('cvs','public');

return view('confirmenlist')->with('email', $email);

  }
}
