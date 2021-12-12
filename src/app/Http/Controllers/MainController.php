<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
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
        $reviews = new ContactModel();
        return view('comment', ['reviews' => $reviews->all()]);

    }

    public function comment_check(Request $request){
       $valid = $request->validate([
           'email' => 'required|min:4|max:30',
           'subject' => 'required|min:4|max:20',
           'message' => 'required|min:15|max:500'
       ]);

        $review = new ContactModel();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('comment');
    }


}
