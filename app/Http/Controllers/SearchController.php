<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use AUTH;
use DB;
use App\Http\Controllers\Controller;


class SearchController extends Controller
{


  public function search(Request $request)
  {
    $request->validate([
     'find' => 'max:255'
   ]);

    $find = $request->get('find');


    $search = DB::table('sell_draft')->where([
                  ['title', 'LIKE', '%'.$find.'%'], ['status', '=', 'Publish'],
                  ])->orderBy('id', 'desc')->simplePaginate(15);

                    DB::table('sell_draft')->where('title', 'LIKE', '%'.$find.'%')->increment('views', 1);

                  if (count($search) > 0) {

                  foreach ($search as $query) {
                    $id = $query->identifier;
                    $addTag = DB::table('tag')->where('identifier', '=', $id)->get();
                    $addLan = DB::table('language')->where('identifier', '=', $id)->get();

                    return view('search')->with('stitle', $find)
                                         ->with('results', $search)
                                         ->with('languages', $addLan)
                                         ->with('tags', $addTag);
                  }



                         }else {
                           $addTag = DB::table('tag')->where('tag', '=', $find)->get();
                           if (count($addTag) > 0) {
                             foreach ($addTag as $query) {
                               $id = $query->identifier;
                             }
                             $title = DB::table('sell_draft')->where('identifier', '=', $id)->orderBy('id', 'desc')->simplePaginate(15);
                             $tags = DB::table('tag')->where('identifier', '=', $id)->get();
                             $addLan = DB::table('language')->where('identifier', '=', $id)->get();

                             return view('search')->with('stitle', $find)
                                                  ->with('results', $title)
                                                  ->with('languages', $addLan)
                                                  ->with('tags', $tags);
                           }else {

                           return view('search')->with('stitle', $find)
                                                ->with('results', $search);
                                              }
                         }
  }

}
