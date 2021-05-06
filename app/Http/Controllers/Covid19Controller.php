<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Http;

class Covid19Controller extends Controller
{
    public function list(){
       $data = Http::get('https://coronavirus-19-api.herokuapp.com/countries')->json();
        return view('covid',['data'=>$data]);

    }
}
