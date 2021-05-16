<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customer =\App\Models\Customer::all();
        return view ('customer.index',compact('customer'));
    }
    public function create(){
        return view('customer.create');
    }
    public function store(){
        \App\Models\Customer::create(request()->validate([
            'name'=>'required', 'email'=>'required|email'
            ]));

        return redirect('/customer');
    }
    public function show(){
        
    }
}
