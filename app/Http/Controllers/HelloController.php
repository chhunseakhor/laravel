<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{

    public function about(){
        return view('about');
    }

    public function services(){
        $services = [
            'service1',
            'service2',
            'service3',
        ]
        return view('services',compact('services'));
    }
}
