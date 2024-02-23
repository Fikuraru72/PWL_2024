<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
       }

    public function index(){
        return 'Selamat Datang';
    }

    public function about (){
        $nama  = "Abiyyu Fiqlal";
        $nim =  "2241720014";
        return 'Nama : ' . $nama . '<br>' . 'NIM : ' . $nim;
    }

    public function  articles($id) {
        return 'Ini adalah halaman artikel ' .$id ;
    }

    public function greeting () {
        return view('blog.hello')
        -> with('name', 'Fiqlal')
        -> with('occupation', 'Astrounaut');
    }

}

