<?php

namespace App\Http\Controllers;
use Illuminate\Http\Requests;

use \App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        $customer =Customer::all();
        return view ('customer.index',compact('customer'));
    }
    public function create(){
        return view('customer.create');
    }
    public function store(){
        Customer::create(request()->validate([
            'name'=>'required',
            'email'=>'required|email'
            ]));

        return redirect('/customer');
    }
    // public function show($customerId){
    //      $customer =\App\Models\Customer::find($customerId); (ទម្រង់ត្រូវសរសេរដំបូងបំផុត ដោយមានកែសម្រួលក្នុងសរសេរ code)
    //      return view('customer.show',compact('customer'));
    // }
    // first option

    public function show(Customer $customer){
         return view('customer.show',compact('customer'));
    }
    public function edit(Customer $customer){
        return view ('customer.edit',compact('customer'));
    }
    public function update(Customer $customer){
        $data =request()-> validate([
            'name'=>'request',
            'email'=> 'request|email'
        ]);
        $customer-> update($data);
            return redirect('/customer');
    }

}
