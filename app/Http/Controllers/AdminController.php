<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voyage;
use Validator;

class AdminController extends Controller
{
    function index() {
        return view('admin.index');
    }

    function search(Request $request) {
        $value = $request->input('search');
        $voyage = Voyage::where('localisation', 'LIKE', "%$value%")->get();
        dd($voyage);
    }

    function show($id) {
        $voyage = Voyage::find($id);
        return view('admin.edit_form', ['voyage' => $voyage]);
    }

    function create() {
        return view('admin.form');
    }

    function store(Request $request){
        $voyage = new Voyage;
        $voyage->libelle = $request->input('libelle');
        $voyage->localisation = $request->input('localisation');
        $voyage->description = $request->input('description');
        $voyage->date_debut = $request->input('date_debut');
        $voyage->date_fin = $request->input('date_fin');
        $voyage->cout = $request->input('cout');
        $voyage->photo = $request->input('photo');
        $voyage->disponibilite = $request->input('disponibilite');
        $voyage->save();
        return redirect('admin.form');
    }

    function edit(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'localisation' => 'required'
        ]);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        $voyage = Voyage::find($id);
        $voyage->libelle = $request->input('libelle');
        $voyage->localisation = $request->input('localisation');
        $voyage->description = $request->input('description');
        $voyage->date_debut = $request->input('date_debut');
        $voyage->date_fin = $request->input('date_fin');
        $voyage->cout = $request->input('cout');
        $voyage->photo = $request->input('photo');
        $voyage->disponibilite = $request->input('disponibilite');
        $voyage->save();
        return back()->with('message', 'Success');
    }
}
