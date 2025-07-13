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
        $dir = "assets/img/";
        $imgs = [$dir . 'c1.png', $dir . 'c2.png', $dir . "c3.png"];
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
