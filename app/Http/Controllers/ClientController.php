<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //

    public function index()
    {
        $number = 5;
        $shownav = true;
        $clients = [
            ['name' => 'Alexis'],
            ['name' => 'Liz'],
            ['name' => 'Aria']
        ];

        return view('client.client', compact('clients'), ['number' => $number]);
    }
}
