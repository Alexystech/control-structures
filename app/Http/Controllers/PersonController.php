<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $persons = [
            ['name' => 'Liz'],
            ['name' => 'Alexis'],
            ['name' => 'Jose'],
            ['name' => 'Adriana'],
            ['name' => 'Aria'],
        ];

        $empty_persons = [];

        return view('person.person', compact('persons'), compact('empty_persons'));
    }
}
