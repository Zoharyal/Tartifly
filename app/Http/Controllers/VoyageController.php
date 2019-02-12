<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Voyage;

class VoyageController extends Controller
{
    function index() {
        $voyages = Voyage::all();
        return view('site.voyages', ['voyages' => $voyages]);
    }

    function show($id) {
        $voyage = Voyage::find($id);
        return view('site.voyage', ['voyage' => $voyage]);
    }
}
