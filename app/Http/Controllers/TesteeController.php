<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class TesteeController extends Controller
{
    //testee dashboard
    public function dashboard(){
        return view('testee.dashboard');
    }

    //testee profile
    public function profile(){
        return view('testee.profile');
    }

    //testee tes
    public function tes(){
        return view('testee.tes');
    }

    //testee result
    public function result(){
        return view('testee.result');
    }

    //testee changepw
    public function changepw(){
        return view('testee.change-password');
    }
}
