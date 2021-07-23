<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MailController extends Controller
{
    public function send(Request $request)
    {
        Session::flash('success','Success');
        $name = $request->get('name');
        $email = $request->get('email');
        $subject = $request->get('subject');
        $message = $request->get('message');

        $to = "info@ghimyanmar.com";

        $body = 'Hello, <br><br>

        First Name    : '.$name.'    <br /><br />

        Email : '.$email.'    <br /><br />

        Subject : '.$subject.'    <br /><br />

        Message : '.$message.'    <br /><br />

        ';

        $headers = "From: ".$email."\n";

        // $headers .= "MIME-Version: 1.0\n";

        // $headers .= "Content-type: text/html; charset=iso-8859-1\n";

        if (mail($to, $subject, $body, $headers)) {

            return redirect('contact');

        } else{
            return redirect('contact');
        }
    }
}
