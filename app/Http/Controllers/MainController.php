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

    function not_found() {
        return view('pages.404');
    }

    function services() {
        return view('pages.services');
    }

    function channelog() {
        return view('pages.channelog');
    }

    function password() {
        return view('pages.password');
    }

    function contact() {
        return view('pages.contact');
    }
    
    function pricing() {
        return view('pages.pricing');
    }
}