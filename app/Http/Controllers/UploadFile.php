<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use AUTH;
use DB;
use App\Notifications\UploadSuccess;
use Notification;

class UploadFile extends Controller
{
    public function __invoke(Request $request)
    {
        $file = $request->file;

        if (!($file && $file->isValid())) {
            abort(400);
        }

        $filePath = $file->store('files','public');

        $identifier = session()->get('identifier');
        $email = Auth::user()->email;

        \DB::table('publish')->insertGetId([
          'identifier' => $identifier,
          'file' => $filePath,
          'email' => $email
        ]);

        DB::table('sell_draft')
              ->where('identifier', $identifier)
              ->update(['status' => 'Publish']);

        $request->session()->forget($identifier);

        Notification::route('mail', $email)->notify(new UploadSuccess($email));


        return 200;


    }
}
