<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use AUTH;
use DB;
use App\Http\Controllers\Controller;

class DescriptionsController extends Controller
{

  public function see(Request $request)
  {
     $request->validate([
      'identifier' => 'required:max:255'
    ]);

    $identifier = $request->get('identifier');

    $descriptions = DB::table('sell_draft')->where('identifier', $identifier)->limit(1)->get();
    $addTag = DB::table('tag')->where('identifier', '=', $identifier)->get();
    $addLan = DB::table('language')->where('identifier', '=', $identifier)->get();

    DB::table('sell_draft')->where('identifier', '=', $identifier)->increment('clicks', 1);

    return view('description')
                         ->with('descriptions', $descriptions)
                         ->with('languages', $addLan)
                         ->with('tags', $addTag);

   }
}
