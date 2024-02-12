<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Damancom;
use App\Models\Societe;
use Illuminate\Support\Facades\Session;

class DamancomController extends Controller
{
    public function index()
    {
        
        $damancoms =Damancom::simplePaginate(5);

        return view('damancoms.index', compact('damancoms'));
    }
    public function show($id)
    {
        $damancom = Damancom::find($id);
    
        if (!$damancom) {
            abort(404); 
        }
    
        return view('damancoms.show', compact('damancom'));
    }
    public function create()
    {
        $societes = Societe::All(); 

        return view('damancoms.create', compact('societes'));
    }

    public function store(Request $request)
    {
        $request->validate([
          
            'login' => 'required|email|unique:damancoms',
            'password' => 'required',
            'societe_id' => 'required',
        ]);

        Damancom::create($request->all());
        Session::flash('success', 'Damancom created successfully.');

        return redirect()->route('damancoms.index')->with('success', 'Associé created successfully.');
    }
 
    public function edit($id)
    {
        $societes = Societe::All(); 

        $damancom = Damancom::with('societe')->findOrFail($id);
        return view('damancoms.edit', compact('damancom','societes'));
    }

    public function update(Request $request, $id)
    {
        $damancom = Damancom::findOrFail($id);

        $request->validate([
            'login' => 'required',
            'password' => 'required',
            'societe_id' => 'required',
        ]);
    
        $damancom->update($request->all());
        Session::flash('success', 'Damancom updated successfully.');

        return redirect()->route('cimrs.index');
    }

    
    public function destroy($id)
    {
        $damancom = Damancom::findOrFail($id);
        $damancom->delete();

        return redirect()->route('damancoms.index')->with('success', 'Associé deleted successfully');
    }
    public function search(Request $request)
    {
        $search = $request->search;
    
        $damancoms = Damancom::with('societe')
            ->where(function ($query) use ($search) {
                $query->where('login', 'like', "%$search%");                 
    
                $query->orWhereHas('societe', function ($subquery) use ($search) {
                    $subquery->where('name', 'like', "%$search%");
                });
            })
            ->simplePaginate(5);
    
        return view('damancoms.index', compact('damancoms', 'search'));
    }
        } 
    

