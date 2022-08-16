<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use App\Models\ContactUs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Webmail extends Controller
{
    public $data;


    public function sendEmail(Request $req)
    {
        $data = [
            'name' => $req['first_name'].' '.$req['last_name'],
            'email' => $req['email'],
            'message' => $req['message']
        ];
        $user['to'] = 'bilaalhaider997@gmail.com';
        Mail::to($user['to'])->send(new TestEmail($data));
        session()->flash('success', 'Email Sent Successfuly');
        return redirect('/contact-us');
    }
}
