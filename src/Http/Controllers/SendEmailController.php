<?php

namespace Keshab\SendEmail\Http\Controllers;

use Keshab\SendEmail\Models\Email;
use App\Http\Controllers\Controller;
use Keshab\SendEmail\Mail\SendMessageMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{

    public function index(){
        return view('sendemail::send-email-form');
    }

    public function send(Request $request){

        $this->validate($request,[
            'email' => 'required|email',
            'msg'   => 'required',
        ]);

        $message = $request->msg;
        $email = $request->email;
        $sub = $request->subject;

        Email::create(['receiver'=>$email,'subject'=>$sub,'message'=>$message]);

        Mail::to($email)->send(new SendMessageMailable($message,$sub));

        if(count(Mail::failures())>0){
            foreach (Mail::failures() as $failure){
                $fail = $failure;
            }
            return redirect()->back()->with('error',$fail);
        }
        else{
            return redirect()->back()->with('success','Mail send Successfully');

        }

    }
}
