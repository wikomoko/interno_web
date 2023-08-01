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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    function services() {
        return view('pages.services');
=======
=======
>>>>>>> ae87a678185c729db862145f1c2b6182b6842bcf
=======
>>>>>>> ae87a678185c729db862145f1c2b6182b6842bcf
    function channelog() {
        return view('pages.channelog');
    }

    function password() {
        return view('pages.password');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ae87a678185c729db862145f1c2b6182b6842bcf
=======
>>>>>>> ae87a678185c729db862145f1c2b6182b6842bcf
=======
>>>>>>> ae87a678185c729db862145f1c2b6182b6842bcf
    }
}
