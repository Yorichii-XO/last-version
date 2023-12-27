<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Impot;
use App\Models\User;
class ImpotController extends Controller
{
    public function index()
    {
        
        $impots =Impot::All();

        return view('impots.index', compact('impots'));
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
        $users = User::All(); 

        return view('impots.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
          
            'email' => 'required|email',
            'password' => 'required',
            'user_id' => 'required',
        ]);

        Impot::create($request->all());

        return redirect()->route('impots.index')->with('success', 'Impot created successfully.');
    }
 
    public function edit($id)
    {
        $users = User::All(); 

        $impot =Impot::findOrFail($id);
        return view('impots.edit', compact('impot','users'));
    }

    public function update(Request $request, $id)
    {
        $impot = Impot::findOrFail($id);

        $request->validate([
            'email' => 'required|email',
            'password'=>'required',
            'user_id' => 'required',
        ]);

        $impot->update($request->all());

        return redirect()->route('impots.index')->with('success', 'Impot updated successfully');
    }

    public function destroy($id)
    {
        $impot = Impot::findOrFail($id);
        $impot->delete();

        return redirect()->route('impots.index')->with('success', 'Impot deleted successfully');
    }
    public function search(Request $request){
        $search = $request->search;
        $impots = Impot::where(function($query) use ($search) {
            $query->where('email', 'like', "%$search%")
            ->orWhere('user_id','like',"%$search%")
            ->orWhere('id','like',"%$search%");

        })->get();
      
    
        
        return view('impots.index', compact('impots', 'search'));
    }
}
