<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    static private $data = array(
        ['id' => 1, "npm"=>212310018, "name"=>"Muhammad riski", 'gender' => "M"],
        ['id' => 1, "npm"=>212310018, "name"=>"Muhammad riski", 'gender' => "M"],
        ['id' => 1, "npm"=>212310018, "name"=>"Muhammad riski", 'gender' => "M"],
        ['id' => 1, "npm"=>212310018, "name"=>"Muhammad riski", 'gender' => "M"],
        ['id' => 1, "npm"=>212310018, "name"=>"Muhammad riski", 'gender' => "M"],
        ['id' => 1, "npm"=>212310018, "name"=>"Muhammad riski", 'gender' => "M"],
    );

    public function index() {
        return view('Profiles.profile', ['data' => self::$data
    ]);
    }

    }
    
 
