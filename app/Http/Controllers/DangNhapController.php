<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DangNhapController extends Controller
{
    public function index(){
        return view('website.frontend_Hyas.login');
      
    }
    
}
