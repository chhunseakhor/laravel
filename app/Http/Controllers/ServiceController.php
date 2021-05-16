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

        // $data=request()->validate([
        //     'name'=>'required|min:5|max:10'
        // ]);
        // $service = new \App\Models\Service();
        // $service->name=request('name');
        // $service->save();
        // // dd('inside');
        // return redirect()->back();
        // First Optional

            // $data=request()->validate([
            // 'name'=>'required|min:5|max:10'
            // ]);
            // \App\Models\Service::create($data);
            // return redirect()->back();
        //seconde optional

            \App\Models\Service::create(request()->validate([
                'name'=>'required|min:5|max:10'
                ]));
            return redirect()->back();
        //Thrid optional


    }
}
