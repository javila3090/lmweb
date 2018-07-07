<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewMessageMail;
use App\Message;
use Mail;

class ContactController extends Controller
{
       /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
        ]);

       Message::create($request->all());

       Mail::to('javila3090@gmail.com')->send(new NewMessageMail($request->name,$request->email,$request->message));

       return response()->json(['message' => 'OK']);
   }
}
