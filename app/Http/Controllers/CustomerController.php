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
        $customer = Customer::create($this->validateData());
        return redirect('/customer/'.$customer->id);
    }

    public function show(Customer $customer){
         return view('customer.show',compact('customer'));
    }
    public function edit(Customer $customer){
        return view ('customer.edit',compact('customer'));
    }
    public function update(Customer $customer){

        $customer-> update($this->valideData());
        return redirect('/customer');
    }
    public function destroy(Customer $customer){
        $customer-> delete();
        return redirect('/customer');
    }

    protected function validateData(){
        return request()->validate([
            'name'=>'required',
            'email'=>'required'
        ]);
    }
}
