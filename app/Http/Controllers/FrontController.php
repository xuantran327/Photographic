<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;
// use Mail;

class FrontController extends Controller
{
    public function send(Request $request)
    {
        $input = $request->all();
        Mail::send('mailfb', array('name'=>$input['name'],'email'=>$input['email'], 'content'=>$input['content']), function($message){
	        $message->to('rapunzelxuantran@gmail.com', 'Visitor')->subject('Visitor Feedback!');
	    });
        $request->session::flash('flash_message', 'Send message successfully!');

        return view('form');
    }
}
