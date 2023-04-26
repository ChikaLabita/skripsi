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


}
