<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show(){
        return view('contact');
    }

    //send the email
    public function store(){
        request()->validate(['email'=>'required|email']);

       /* Mail::raw('It works!', function ($message){
            $message->to(request('email'))
            ->subject('Hello there');
        });*/

       Mail::to(request('email'))
             ->send(new ContactMe('shirts'));

        return redirect('contact')->with('message','Email sent!');
    }
}
