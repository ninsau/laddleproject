<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Notifications\UploadSuccess;
use Notification;

class UploadSuccess implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $details;
    /**
     * Create a new job instance.
     *
     * @return void
     */
     public function __construct($details)
     {
       $this->details = $details;
      }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = $this->details['email'];
        $notice = Notification::route('mail', $email)->notify(new UploadSuccess($email));
    }
}
