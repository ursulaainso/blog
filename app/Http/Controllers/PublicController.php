<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index() {
        return view('index');
    }

    public function page1() {
        return view('index');
    }

    public function page2() {
        return view('index');
    }
}
