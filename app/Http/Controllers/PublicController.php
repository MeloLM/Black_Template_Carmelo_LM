<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage(){
        return view('welcome');
    }
    
    public function contact(){
        return view('contactUs');
    }
    
    public function contact_submit(Request $request){
        $name = $request->name;
        $email = $request->input('email');
        $message = $request->input('message');
        $userData = compact('name', 'email', 'message');
        
        Mail::to($email)->send(new ContactMail($userData));
        
        return redirect(route('homepage'))->with('Sented', 'Email inviata! Grazie');
    }
}
