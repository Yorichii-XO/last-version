<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Associé;
use App\Models\Societe;
use Illuminate\Support\Facades\Session;


class AssocieéController extends Controller
{


    public function index()
    {
           $associés = Associé::join('societes', 'associés.societe_id', '=', 'societes.id')
                        ->where('associés.role', 'associé')
                        ->select('associés.*', 'societes.name as societe_name')
                        ->simplePaginate(5); // You can adjust the number of items per page (e.g., 10)
        return view('associes.index', compact('associés'));
    }
    public function create()
    {
        $societes=societe::all();
        return view('associes.create', compact("societes"));
    }
    public function show($id)
    {
        $associe = Associé::with('societe')->findOrFail($id);
        return view('associes.show', compact('associe'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:associés',
            'cin' => 'required',
            'role' => 'required',
            'societe' => 'required|string|exists:societes,name', 
        ]);
    
        $societe = Societe::where('name', $request->input('societe'))->first();
    
        if ($societe) {
            $newAssocié = new Associé([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'cin' => $request->input('cin'),
                'role' => $request->input('role'),
                'societe_id' => $societe->id,
            ]);
    
            $newAssocié->save();
            Session::flash('success', 'Associé created successfully.');

            return redirect()->route('associes.index');
        }
    
        return redirect()->back()->with('error', 'Societe not found.');
    }
    public function edit($id)
    {
        
        $societes=Societe::All();
        $associé = Associé::with('societe')->findOrFail($id);
        return view('associes.edit', compact('associé','societes'));
    }

    public function update(Request $request, $id)
    {
        $associe = Associé::findOrFail($id);
    
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:associés,email,' . $associe->id,
            'cin' => 'required',
            'role' => 'required',
            'societe_id' => 'required|exists:societes,id',
        ]);
    
        $associe->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'cin' => $request->input('cin'),
            'role' => $request->input('role'),
            'societe_id' => $request->input('societe_id'),
        ]);
        Session::flash('success', 'Associé updated successfully.');

        return redirect()->route('associes.index');
    }
    

    public function destroy($id)
    {
        $associé = Associé::findOrFail($id);
        $associé->delete();

        return redirect()->route('associes.index')->with('success', 'Associé deleted successfully');
    }
    public function search(Request $request)
    {
        $search = $request->search;
    
        $associés = Associé::with('societe')
            ->where(function ($query) use ($search) {
                $query->where('name', 'like', "%$search%")
                    ->orWhere('email', 'like', "%$search%")
                    ->orWhere('cin', 'like', "%$search%")
                    ->orWhere('role', 'like', "%$search%");
    
                $query->orWhereHas('societe', function ($subquery) use ($search) {
                    $subquery->where('name', 'like', "%$search%");
                });
            })
            ->simplePaginate(5);
    
        return view('associes.index', compact('associés', 'search'));
    }
    
 
}
