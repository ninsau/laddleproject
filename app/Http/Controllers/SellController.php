<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use AUTH;
use DB;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;


class SellController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware(['auth', 'verified']);
  }


  public function index()
  {
      return view('sell');
  }

  public function draft(Request $request)
  {
    $request->validate([
     'title' => 'required:max:255',
     'description' => 'required:max:255',
     'tag' => 'required:max:255',
     'url' => 'required:max:255',
     'language' => 'required:max:255',
     'price' => 'required:max:255',
     'guide' => 'required|file|mimes:docx,pdf,txt|max:2048'
   ]);

   ini_set('memory_limit','256M');

  $title = $request->post('title');
  $description = $request->post('description');
  $url = $request->post('url');
  $price = $request->post('price');
  $identifier = mt_rand(1000000000000, 99999999999999);
  $now = date('Y-m-d H:i');
  $email = Auth::user()->email;
  $name = Auth::user()->name;
  $request->session()->put('identifier', $identifier);
  $file = $request->file;


  foreach ($request->post('tag') as $tag) {
    \DB::table('tag')->insertGetId([
      'identifier' => $identifier,
      'tag' => $tag,
      'email' => $email
    ]);
  };
  foreach ($request->post('language') as $language) {
    \DB::table('language')->insertGetId([
      'identifier' => $identifier,
      'language' => $language,
      'email' => $email
    ]);
  };

  $file_name = $file->getClientOriginalName();
  $resize = Image::make(($file))->resize(300, 200);
  $resize->insert('logo/6.png', 'bottom-right', 10, 10)->save($file_name);
  Storage::putFileAs('public/sellimages', new File($file_name), $file_name, 'public');
  $path_image = Storage::url('sellimages/'.$file_name);

   $guide = $request->file('guide');
   $path_guide = $guide->store('guides','public');

   \DB::table('sell_draft')->insertGetId([
     'identifier' => $identifier,
     'title' => $title,
     'description' => $description,
     'url' => $url,
     'price' => $price,
     'image' => $path_image,
     'guide' => $path_guide,
     'status' => 'Draft',
     'views' => '0',
     'sold' => '0',
     'clicks' => '0',
     'dte' => $now,
     'earned' => '0',
     'name' => $name,
     'email' => $email
   ]);

   return view('source');

  }

}
