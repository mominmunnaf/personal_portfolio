<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_dashboard(){
        return view('admin.dashboard');
    }

    public function profile(){
        return view('admin.profile');
    }
}
