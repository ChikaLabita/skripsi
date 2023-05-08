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

    //Admin profile
    public function profile(){
        return view('admin.profile');
    }

    //Admin Testee
    public function testee(){
        return view('admin.testee');
    }

    //Admin Faktor
    public function faktor(){
        return view('admin.faktor');
    }

    //Admin Ciri
    public function ciri(){
        return view('admin.ciri');
    }

    //Admin Change-Password
    public function changepw(){
        return view('admin.change-password');
    }

    //Admin Soal Tes
    public function soaltes(){
        return view('admin.soaltes');
    }

    //Admin Riwayat
    public function riwayat(){
        return view('admin.riwayat');
    }

    //Admin Rules
    public function rules(){
        return view('admin.rules');
    }


}
