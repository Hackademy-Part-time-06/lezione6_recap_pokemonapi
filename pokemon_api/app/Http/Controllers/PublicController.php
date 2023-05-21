<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('poke.index');
    }

    public function show($id)
    {
        return view('poke.show');
    }
}
