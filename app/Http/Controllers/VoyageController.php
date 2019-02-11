<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoyageController extends Controller
{
    function index() {
        return view('site.voyages');
    }

    function show($id) {
        return view('site.voyages', ['id' => '$id']);
    }
}
