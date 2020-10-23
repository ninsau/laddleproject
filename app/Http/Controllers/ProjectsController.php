<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AUTH;
use DB;

class ProjectsController extends Controller
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
        return view('projects');
    }

    public function projects(Request $request)
    {
      $identifier_d = $request->get('delete');
      $identifier_r = $request->get('reserve');
      $identifier_p = $request->get('publish');

      DB::table('sell_draft')->where('identifier', $identifier_d)->delete();
      DB::table('sell_draft')->where('identifier', $identifier_r)->update(['status' => 'Draft']);;
      DB::table('sell_draft')->where('identifier', $identifier_p)->update(['status' => 'Publish']);;

      $email = Auth::user()->email;
      $projects = DB::table('sell_draft')->where('email', $email)->simplePaginate(14);

        return view('projects')->with('projects', $projects);
    }

}
