<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    private $email;
    private $subject;
    private $message;
    private $code;

    public function __construct($email, $subject, $message, $code)
    {
        $this->email = $email;
        $this->subject = $subject;
        $this->message= $message;
        $this->code= $code;
    }

    public function send() {
        $data = [
            'content' => $this->message,
            'code' =>  $this->code
        ];
        Mail::send('emails.message', $data, function ($m) {
            $m->to($this->email)
                ->subject($this->subject);
        });
        return 'Success';
    }
}
