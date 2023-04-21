<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = array();
        $data['title'] = "Blade Directive";
        $data['npm'] = 212310035;
        $students[] = array("npm"=>212310017, "name"=>"Muhammad Alfan", "alamat"=>"jl Walet no 13", "gender"=>'M');
        $students[] = array("npm"=>212310035, "name"=>"Adrian Adhari","alamat"=>"jl Setapak", "gender"=>'M');
        $students[] = array("npm"=>212310011, "name"=>"Cindy Kevina", "alamat"=>"jl Angsa", "gender"=>'F');
        $students[] = array("npm"=>212310037, "name"=>"Angga Parulian", "alamat"=>"jl Ciburuy", "gender"=>'M');
        $students[] = array("npm"=>212310005, "name"=>"Erdiana Ragil", "alamat"=>"jl Bebek", "gender"=>'F');
        $data['students'] = $students;
        return view('modules.home.home')->with("data",$data);
    }

    public function multiplearr(){
        $data = array();
        $data['title'] = "List of students";

        $students[] = array("npm"=>212310017, "name"=>"Muhammad Alfan", "alamat"=>"jl Walet no 13", "gender"=>'M');
        $students[] = array("npm"=>212310035, "name"=>"Adrian Adhari","alamat"=>"jl Setapak", "gender"=>'M');
        $students[] = array("npm"=>212310011, "name"=>"Cindy Kevina", "alamat"=>"jl Angsa", "gender"=>'F');
        $students[] = array("npm"=>212310037, "name"=>"Angga Parulian", "alamat"=>"jl Ciburuy", "gender"=>'M');
        $students[] = array("npm"=>212310005, "name"=>"Erdiana Ragil", "alamat"=>"jl Bebek", "gender"=>'F');
        $data['students'] = $students;
        return view('modules.home.home')->with("data",$data);
    }
}
