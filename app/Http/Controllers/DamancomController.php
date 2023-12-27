<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Damancom;
use App\Models\User;

class DamancomController extends Controller
{
    public function index()
    {
        
        $damancoms =Damancom::All();

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
        $users = User::All(); 

        return view('damancoms.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
          
            'email' => 'required|email|unique:damancoms',
            'password' => 'required',
            'user_id' => 'required',
        ]);

        Damancom::create($request->all());

        return redirect()->route('damancoms.index')->with('success', 'Associé created successfully.');
    }
 
    public function edit($id)
    {
        $users = User::All(); 

        $damancom = Damancom::findOrFail($id);
        return view('damancoms.edit', compact('damancom','users'));
    }

    public function update(Request $request, $id)
    {
        $damancom = Damancom::findOrFail($id);

        $request->validate([
            'email' => 'required|email',
            'password'=>'required',
            'user_id' => 'required',
        ]);

        $damancom->update($request->all());

        return redirect()->route('damancoms.index')->with('success', 'damancom updated successfully');
    }

    public function destroy($id)
    {
        $damancom = Damancom::findOrFail($id);
        $damancom->delete();

        return redirect()->route('damancoms.index')->with('success', 'Associé deleted successfully');
    }
    public function search(Request $request){
        $search = $request->search;
        $damancoms = Damancom::where(function($query) use ($search) {
            $query->where('email', 'like', "%$search%")
            ->orWhere('user_id','like',"%$search%")
            ->orWhere('id','like',"%$search%");

        })->get();
      
    
        
        return view('damancoms.index', compact('damancoms', 'search'));
    }
 
        } 
    

