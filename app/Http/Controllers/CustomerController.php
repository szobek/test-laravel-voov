<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list()
    {
        $clients = Customer::all();

        return view('client.list', compact('clients'));
    }

    public function create()
    {
        
        $imgs = ['c1.png','c2.png',"c3.png"];
        return view('client.create', compact('imgs'));
    }
    public function store(Request $request)
    {
        try {
            Customer::create($request->all());
            return redirect()->route('list-clients');
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function remove(Request $request)
    {
        try {
            Customer::findOrFail($request->input('id'))->delete();
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
