<?php

namespace App\Http\Controllers;
use App\Models\Regus;
use App\Models\Societe;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RegusController extends Controller
{
    public function index()
    {
        
        $reguses =Regus::simplePaginate(5);

        return view('regus.index', compact('reguses'));
    }

    public function show($id)
    {
        $regu = Regus::with('societe')->findOrFail($id);
        return view('regus.show', compact('regu'));
    }

    public function create()
    {
        $societes = Societe::All(); 

        return view('regus.create', compact('societes'));
    }

    public function store(Request $request)
    {
        $request->validate([
          
            'login' => 'required',
            'password' => 'required',
            'societe' => 'required|string|exists:societes,name', 
        ]);
    
        $societe = Societe::where('name', $request->input('societe'))->first();
    
        if ($societe) {
            $newAssocié = new Regus([
                'login' => $request->input('login'),
                'password' => $request->input('password'),
               
                'societe_id' => $societe->id,
            ]);
    
            $newAssocié->save();
            Session::flash('success', 'Regus created successfully.');

            return redirect()->route('regus.index');
        }
    
        return redirect()->back()->with('error', 'Societe not found.');
    }
    public function edit($id)
    {
        $societes = Societe::All(); 

        $regus =Regus::findOrFail($id);
        return view('regus.edit', compact('regus','societes'));
    }

    public function update(Request $request, $id)
    {
        $Regus = Regus::findOrFail($id);

        $request->validate([
            'email' => 'required',
            'password'=>'required',
            'societe_id' => 'required',
        ]);

        $Regus->update($request->all());
        Session::flash('success', 'Regus updated successfully.');

        return redirect()->route('regus.index')->with('success', 'regus updated successfully');
    }

    public function destroy($id)
    {
        $impot = Regus::findOrFail($id);
        $impot->delete();

        return redirect()->route('regus.index')->with('success', 'regus deleted successfully');
    }

    public function search(Request $request)
    {
        $search = $request->search;
    
        $reguses = Regus::with('societe')
            ->where(function ($query) use ($search) {
                $query->where('login', 'like', "%$search%")
                    ->orWhere('password', 'like', "%$search%");
                
                $query->orWhereHas('societe', function ($subquery) use ($search) {
                    $subquery->where('name', 'like', "%$search%");
                });
            })
            ->simplePaginate(5);
    
        return view('regus.index', compact('reguses', 'search'));
    }
    
}
