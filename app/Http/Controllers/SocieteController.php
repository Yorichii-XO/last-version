<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Societe;

class SocieteController extends Controller
{
 
    public function index()
    {
        $societes = Societe::all();
        return view('societes.index', compact('societes'));
    }

    public function create()
    {
        return view('societes.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'formes_juridique' => 'required|unique:societes',
            'siege_social' => 'required',
            'capital' => 'required',
            'activite_principal' => 'required',
            'rc' => 'required',
            'patente' => 'required',
            'if' => 'required',
            'cnss' => 'required',
            'ice' => 'required',
            'rib' => 'required',
            'date_exploitation' => 'required|date',
            'date_debut_exploitation' => 'required|date',
         ]);

         Societe::create($request->all());

        return redirect()->route('societes.index')->with('success', 'User created successfully.');
    }
    
    public function edit($id)
{
    $societe = Societe::findOrFail($id);
    return view('societes.edit', compact('societe'));
}

public function update(Request $request, $id)
{
    $societes = Societe::findOrFail($id);
    
    $request->validate([
        'name' => 'required',
        'formes_juridique' => 'required',
        'siege_social' => 'required',
        'capital' => 'required',
        'activite_principal' => 'required',
        'rc' => 'required',
        'patente' => 'required',
        'if' => 'required',
        'cnss' => 'required',
        'ice' => 'required',
        'rib' => 'required',
        'date_exploitation' => 'required',
        'date_debut_exploitation' => 'required',
    ]);

    $societes->update($request->all());

    return redirect()->route('societes.index')->with('success', 'societe updated successfully');
}

public function show($id)
{
    $societe = Societe::find($id);

    if (!$societe) {
        abort(404); 
    }

    return view('societes.show', compact('societe'));
}


public function destroy($id)
{
    $societe = Societe::findOrFail($id);
    $societe->delete();

    return redirect()->route('societes.index')->with('success', 'societe deleted successfully');
}
public function search(Request $request){
    $search = $request->search;
    $societes = Societe::where(function($query) use ($search) {
        $query->where('name', 'like', "%$search%")
        ->orWhere('formes_juridique','like',"%$search%")
        ->orWhere('capital','like',"%$search");

    })->get();
    
    
    return view('societes.index', compact('societes', 'search'));
}


}
