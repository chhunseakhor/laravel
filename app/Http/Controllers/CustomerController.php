<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use \App\Models\Customer;


class CustomerController extends Controller
{
    public function index(Request $request){
        $customer =Customer::where('active',$request->query('active',1))->get();
        return view ('customer.index',compact('customer'));
    }
    public function create(){
        $customer= new Customer();
        
        return view('customer.create',compact('customer'));
    }
    public function store(){
        $customer = Customer::create($this->validateData());
        Mail::to($customer->email())->send(new WelcomeMail());
        return redirect('/customer/'.$customer->id);
    }

    public function show(Customer $customer){
         return view('customer.show',compact('customer'));
    }
    public function edit(Customer $customer){
        return view ('customer.edit',compact('customer'));
    }
    public function update(Customer $customer){

        $customer-> update($this->validateData());
        return redirect('/customer');
    }
    public function destroy(Customer $customer){
        $customer-> delete();
        return redirect('/customer');
    }

    protected function validateData(){
        return request()->validate([
            'name'=>'required',
            'email'=>'required|email'
        ]);
    }
}
