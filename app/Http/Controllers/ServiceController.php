<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){

        // $service = [
        // 'service 1',
        // 'service 2',
        // 'service 3'
        // ];
        // $service =[];
         $service =\App\Models\Service::all();
        //  dd($services);
        return view ('service.index',["service"=>$service]);
    }
    public function store(){
        dd('inside');
    }
}
