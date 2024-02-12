<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\Models\Cimr;
use App\Models\Societe;
class CimrController extends Controller
{
    public function index()
    {
        
        $cimrs =Cimr::simplePaginate(5);

        return view('cimrs.index', compact('cimrs'));
    }

    public function show($id)
    {
        $cimr = Cimr::find($id);
    
        if (!$cimr) {
            abort(404); 
        }
    
        return view('cimrs.show', compact('cimr'));
    }

    public function create()
    {
        $societes = Societe::All(); 

        return view('cimrs.create', compact('societes'));
    }

    public function store(Request $request)
    {
       
    
        $request->validate([
          
            'login' => 'required|email|unique:cimrs',
            'password' => 'required',
            'societe_id' => 'required',     
           ]);

        Cimr::create($request->all());
        Session::flash('success', 'Cimr created successfully.');

            Session::flash('success', 'Cimr created successfully.');

        return redirect()->route('cimrs.index');
    }
    
 
    public function edit($id)
    {
        $societes = societe::All(); 

        $cimr = Cimr::findOrFail($id);
        return view('cimrs.edit', compact('cimr','societes'));
    }

    public function update(Request $request, $id)
    {
        $Cimr = Cimr::findOrFail($id);

        $request->validate([
            'login' => 'required',
            'password' => 'required',
            'societe_id' => 'required',
        ]);
    
        $Cimr->update($request->all());
        Session::flash('success', 'Cimr Updated successfully.');

        return redirect()->route('cimrs.index');
    }

    public function destroy($id)
    {
        $cimr = Cimr::findOrFail($id);
        $cimr->delete();

        return redirect()->route('cimrs.index')->with('success', 'Associé deleted successfully');
    }

    public function search(Request $request)
    {
        $search = $request->search;
    
        $cimrs = Cimr::with('societe')
            ->where(function ($query) use ($search) {
                $query->where('login', 'like', "%$search%")
                    ->orWhere('password', 'like', "%$search%");    
                $query->orWhereHas('societe', function ($subquery) use ($search) {
                    $subquery->where('name', 'like', "%$search%");
                });
            })
            ->simplePaginate(5);
    
        return view('cimrs.index', compact('cimrs', 'search'));
    }
    
}
