<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function home(){
        return view('home');

    }
    public function contactus(){
        return view('contactus');

    }
    public function comment(){
        return view('comment');

    }

    public function comment_check(Request $request){
       $valid = $request->validate([
           'email' => 'required|min:4|max:30',
           'subject' => 'required|min:4|max:20',
           'message' => 'required|min:15|max:500'
       ]);
    }
}
