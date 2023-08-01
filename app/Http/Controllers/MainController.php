<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index() {
        return view('pages.home');
    }

    function about() {
        return view('pages.about');
    }
    function services_single() {
        return view('pages.services_single');
    }
}
