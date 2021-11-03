<?php

namespace App\Http\Controllers\Mail;

use App\Mail\SmtpMail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;
use App\Jobs\sendEmailQueue;

class MailController extends Controller
{
    public function sendEmailForm()
    {
        return view('email.smtp');
    }
    public function sendEmail(Request $request)
    {
        $details = [
            'to' => 'an0261642@gmail.com',
            'from' => $request->from,
            'subject' => $request->subject,
            'body' => $request->body
        ];
        
        dispatch(new sendEmailQueue($details));
        return redirect()->back();
        // Mail::to("an0261642@gmail.com")->send(new SmtpMail($details));
    }
}
