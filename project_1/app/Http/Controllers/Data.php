<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Data extends Controller
{
    public function list(){
        //$tab =  Http::get("https://jsonplaceholder.typicode.com/photos")->json();
        $tab =  Http::get("http://api.nbp.pl/api/exchangerates/rates/a/chf/")->json();
        //dd($tab);
        return view("data", ["tab" => $tab]);




        //return "test";
    }
}
