<?php

namespace Keshab\SendEmail\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMessageMailable extends Mailable
{
    use Queueable, SerializesModels;

    protected $message,$sub;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message,$sub)
    {
        $this->message = $message;
        $this->sub = $sub;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $msg = $this->message;
        $subject = $this->sub;
        return $this->view('sendemail::email',compact('msg','subject'));
    }
}
