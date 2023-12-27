<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gerant;
use App\Models\Notification;
use Illuminateo\Support\Facades\Auth;

class GerantController extends Controller
{
    public function index()
    {
        $gerants =Gerant::All();

        return view('gerants.index', compact('gerants'));
    }
    public function create()
    {
        return view('gerants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:gerants',
            'cin' => 'required',
            'role' => 'required',
        ]);

        $gerant = Gerant::create($request->all());
        $message = "You have a new message in the contact form!";

        Notification::create([
            'user_id' => auth()->id(),
            'message' => $message,
        ]);
    
    
        return redirect()->route('gerants.index')->with('success', 'gerant created successfully.');
    }

    public function edit($id)
    {
        $gerant = Gerant::findOrFail($id);
        return view('gerants.edit', compact('gerant'));
    }

    public function update(Request $request, $id)
    {
        $gerants = Gerant::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'cin'=>'required',
            'role' => 'required',
        ]);

        $gerants->update($request->all());

        return redirect()->route('gerants.index')->with('success', 'Gerant updated successfully');
    }

    public function destroy($id)
    {
        $gerants = Gerant::findOrFail($id);
        $gerants->delete();

        return redirect()->route('gerants.index')->with('success', 'Associé deleted successfully');
    }
    public function search(Request $request){
        $search = $request->search;
        $gerants = Gerant::where(function($query) use ($search) {
            $query->where('name', 'like', "%$search%")
            ->orWhere('email','like',"%$search%")
            ->orWhere('cin','like',"%$search");
    
        })->get();
      
    
        
        return view('gerants.index', compact('gerants', 'search'));
    }
}
