<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $name = "Pluto";
        return view('pages.test', compact('name'));
    }

    public function getFirstPage()
    {
        return view('firstPage');
    }

    public function getSecondPage()
    {
        return view('secondPage');
    }
}
