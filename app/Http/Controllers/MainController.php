<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index() {
        return view('main.index');
    }

    public function about() {
        return view('main.about');
    }

    public function contact() {
        return view('main.contact');
    }

    public function noperms() {
        return view('error.noperms');
    }
}
