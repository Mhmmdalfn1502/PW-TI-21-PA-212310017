<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Quiz2Controller extends Controller
{
    public function index () {
        return view('Quiz2');
    }
    
    public function Quiz2 () {
        return "ini manggil method Quiz2";
    }


}
