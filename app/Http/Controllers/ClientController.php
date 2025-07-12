<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function list()
    {
        $clients = Client::all();

        return view('client.list', compact('clients'));
    }

    public function create()
    {
        $dir = "assets/img/";
        $imgs = [$dir . 'c1.png', $dir . 'c2.png', $dir . "c3.png"];
        return view('client.create', compact('imgs'));
    }
    public function store() {}

    public function remove(Request $request)
    {
        try {
            Client::findOrFail($request->input('id'))->delete();
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
