<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $req){
      // return "test";
      $req->session()->put('data', $req->input());
      // return $req->session()->get('data');
      return redirect('profile');
    }
}
