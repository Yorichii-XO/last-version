<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Associé;

class AssocieéController extends Controller
{


    public function index()
    {
        $associés =Associé::where('role', 'associé')->get();

        return view('associes.index', compact('associés'));
    }

    public function create()
    {
        return view('associes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:associés',
            'cin' => 'required',
            'role' => 'required',
        ]);

        Associé::create($request->all());

        return redirect()->route('associes.index')->with('success', 'Associé created successfully.');
    }
 
    public function edit($id)
    {
        $associé = Associé::findOrFail($id);
        return view('associes.edit', compact('associé'));
    }

    public function update(Request $request, $id)
    {
        $associé = Associé::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'cin'=>'required',
            'role' => 'required',
        ]);

        $associé->update($request->all());

        return redirect()->route('associes.index')->with('success', 'Associé updated successfully');
    }

    public function destroy($id)
    {
        $associé = Associé::findOrFail($id);
        $associé->delete();

        return redirect()->route('associes.index')->with('success', 'Associé deleted successfully');
    }
    public function search(Request $request){
        $search = $request->search;
        $associés = Associé::where(function($query) use ($search) {
            $query->where('name', 'like', "%$search%")
            ->orWhere('email','like',"%$search%")
            ->orWhere('cin','like',"%$search");
    
        })->get();
      
    
        
        return view('associes.index', compact('associés', 'search'));
    }
 
}
