<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){

        $customer = Customer::all();


        return view('customer.index',compact('customer'));
    }
   public function create(){
       $catagory = Catagory::all();
        return view('customer.create',compact('catagory'));
   }



    public function store(){
        $data = \request()->validate([
           'name' => 'required|min:3',
            'email'=> 'required|email',
            'active'=> 'required',
            'catagory_id'=>'required',
            'link'=> 'required',


        ]);

        Customer::create($data);


        return redirect('customer');
    }

    public function show(Customer $customer){
        //$customer = Customer::find($customer);
        return view('customer.show',compact('customer'));
    }

    public function edit(Customer $customer){
        $catagory = Catagory::all();
        return view('customer.edit',compact('customer','catagory'));
    }



    public function update(Customer $customer){
        $data = \request()->validate([
            'name' => 'required|min:3',
            'email'=> 'required|email',
            'active'=> 'required',
            'catagory_id'=>'required',
            'link'=> 'required',

        ]);
        $customer->update($data);
        return redirect('customer/' . $customer->id);
    }

    public function destroy(Customer $customer){
        $customer->delete();
        return redirect('customer');
    }

}
