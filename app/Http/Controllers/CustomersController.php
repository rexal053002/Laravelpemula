<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;
class CustomersController extends Controller
{
    public function index()
    {
        $customers = \App\Customers::all();
        return $customers;
    }
    public function show($id)
    {
        $customers = \App\customers::find($id);
        return $customers;
    }
    public function store($id,$code_customers,$name,$email,$country,$city,$address,$contact_number)
    {
        $customers = new customers();
        $customers->code_customers = "";
        $customers->name = "";
        $customers->email = "";
        $customers->country = "";
        $customers->city = "";
        $customers->address = "";
        $customers->contact_number = "";
        $customers->save();
        return $customers;
    }
    public function edit($id,$code_customers,$name,$email,$country,$city,$address,$contact_number)
    {
        $customers = customers::find($id);
        $customers->code_customers = "";
        $customers->name = "";
        $customers->email = "";
        $customers->country = "";
        $customers->city = "";
        $customers->address = "";
        $customers->contact_number = "";
        $customers->save();
        return $customers;
    }
    public function delete()
    {
        $customers = $customers::find($id);
        $customers->delete();
        return $customers;
    }
}
