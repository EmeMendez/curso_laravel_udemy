<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageRecieved;

//use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function store(){
     //return request('email') ;
     $msg = request()->validate([
     	'name' => 'required',
     	'email' => 'required|email',
     	'subject' => 'required',
      	'content' => 'required|min:3'
    	

     ]);

     //enviar email
     
     Mail::to('emisoad22@gmail.com')->queue(new 	MessageRecieved($msg));

     //return new MessageRecieved($msg);
    // return 'mensaje enviado';
        return back()->with('status','Recibimos tu mensaje, te responderemos en menos de 24 horas');
    }
}
