<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Notifications\DownloadSuccess;
use App\Notifications\NotifyForDownload;
use App\Notifications\Enlisted;

use Notification;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        $identifier = $paymentDetails['data']['metadata'];
        $customer_email = $paymentDetails['data']['customer']['email'];



        if ($identifier = '5555555555' ) {

          DB::table('enlist')
                ->where('email', $customer_email)
                ->update(['status' => 'Complete']);

                Notification::route('mail', $customer_email)->notify(new Enlisted($customer_email));

                echo "You have successfully enlisted. You will now receive emails and phone calls from your dream companies and more.";


        }else {


        $status = $paymentDetails['status'];
        $message = $paymentDetails['message'];
        $reference = $paymentDetails['data']['reference'];
        $amount = $paymentDetails['data']['amount'];
        $currency = $paymentDetails['data']['currency'];
        $channel = $paymentDetails['data']['channel'];
        $paid_at = $paymentDetails['data']['paid_at'];

        $earned = ($amount/600) * 0.9;

        \DB::table('payment')->insertGetId([
          'status' => $status,
          'message' => $message,
          'reference' => $reference,
          'amount' => $amount,
          'paid_at' => $paid_at,
          'channel' => $channel,
          'identifier' => $identifier,
          'customer_email' => $customer_email,
          'currency' => $currency
        ]);

        DB::table('sell_draft')->where('identifier', '=', $identifier)->increment('sold', 1);

        DB::table('sell_draft')->where('identifier', '=', $identifier)->increment('earned', $earned);

        $source = DB::table('publish')->where('identifier', '=', $identifier)->limit(1)->get();

        $when = now()->addMinutes(1);

        foreach ($source as $email) {
          $dev_email = $email->email;
          Notification::route('mail', $dev_email)->notify((new NotifyForDownload($dev_email))->delay($when));
        }

        Notification::route('mail', $customer_email)->notify((new DownloadSuccess($customer_email))->delay($when));

        return view('receive')->with('source', $source);
    }

  }

}
