<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Admin;

class AdminController extends Controller
{
    //Admin dashboard
    public function dashboard(){
        return view('admin.dashboard');
    }


}
