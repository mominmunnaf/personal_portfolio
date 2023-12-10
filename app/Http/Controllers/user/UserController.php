<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        return view('user.home');
    }

    public function user_portfolio(){
        return view('user.portfolio');
    }

    public function user_about(){
        return view('user.about');
    }

    public function user_portfolio_details(){
        return view('user.portfolio_details');
    }

    public function user_contact(){
        return view('user.contact');
    }

    public function user_resume(){
        return view('user.resume');
    }

    
}
