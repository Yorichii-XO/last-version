<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Impot;
use App\Models\User;
use App\Models\Societe;
use Illuminate\Support\Facades\Session;

class ImpotController extends Controller
{
    public function index()
    {
        $societe = Societe::All(); 

        
        $impots =Impot::simplePaginate(5);

        return view('impots.index', compact('impots','societe'));
    }
    public function show($id)
    {
        $impot = Impot::find($id);
    
        if (!$impot) {
            abort(404); 
        }
    
        return view('impots.show', compact('impot'));
    }
    public function create()
    {
        $societes = Societe::All(); 

        return view('impots.create', compact('societes'));
    }

    public function store(Request $request)
    {
        $request->validate([
          
            'login' => 'required|email',
            'password' => 'required',
            'code_acce'=>'required',
            'societe' => 'required|string|exists:societes,name', 
        ]);
    
        $societe = Societe::where('name', $request->input('societe'))->first();
    
        if ($societe) {
            $newAssocié = new Impot([
                
                'login' => $request->input('login'),
                'password' => $request->input('password'),
                'code_acce'=>$request->input('code_acce'),
                'societe_id' => $societe->id,
            ]);
    
            $newAssocié->save();
            Session::flash('success', 'Impot created successfully.');

            return redirect()->route('impots.index');
        }
    
        return redirect()->back()->with('error', 'Societe not found.');
    }
 
    public function edit($id)
    {
        $societes = Societe::All(); 

        $impot =Impot::with('societe')->findOrFail($id);
        return view('impots.edit', compact('impot','societes'));
    }

    public function update(Request $request, $id)
    {
        $impot = Impot::findOrFail($id);

        $request->validate([
            'login' => 'required',
            'password' => 'required',
            'code_acce'=>'required',
            'societe_id' => 'required',
        ]);
    
        $impot->update($request->all());
        Session::flash('success', 'Impot Updated successfully.');

        return redirect()->route('impots.index');
    }

    
    public function destroy($id)
    {
        $impot = Impot::findOrFail($id);
        $impot->delete();

        return redirect()->route('impots.index')->with('succss', 'Impot deleted successfully');
    }
    public function search(Request $request)
    {
        $search = $request->search;
    
        $impots = Impot::with('societe')
            ->where(function ($query) use ($search) {
                $query->where('login', 'like', "%$search%")
                    ->orWhere('password', 'like', "%$search%");
                  
    
                $query->orWhereHas('societe', function ($subquery) use ($search) {
                    $subquery->where('name', 'like', "%$search%");
                });
            })
            ->simplePaginate(5);
    
        return view('impots.index', compact('associés', 'search'));
    }
    
 
}
