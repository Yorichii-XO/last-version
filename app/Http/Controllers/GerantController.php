<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gerant;
use App\Models\Notification;
use Illuminateo\Support\Facades\Auth;
use App\Notifications\NewGerantNotification;
use App\Models\Societe;
use Illuminate\Support\Facades\Session;

class GerantController extends Controller
{
    public function index()
    {
        $gerants = Gerant::join('societes', 'gerants.societe_id', '=', 'societes.id')
                        ->where('gerants.role', 'gerant')
                        ->select('gerants.*', 'societes.name as societe_name') // Update the alias to avoid conflicts
                        ->simplePaginate(5); // You can adjust the number of items per page (e.g., 10)
    
        return view('gerants.index', compact('gerants'));
    }

    public function create()
    {
        $societes=societe::all();
        return view('gerants.create',compact('societes'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:gerants',
            'cin' => 'required',
            'role' => 'required',
            'societe_id' => 'required|string|exists:societes,name', 
        ]);
    
        $societe = Societe::where('name', $request->input('societe_id'))->first();
    
        if ($societe) {
            $newGerant = new Gerant();
    
            $newGerant->name = $request->input('name');
            $newGerant->email = $request->input('email');
            $newGerant->cin = $request->input('cin');
            $newGerant->role = $request->input('role');
            $newGerant->societe_id = $societe->id;
    
    
            $newGerant->save();
            Session::flash('success', 'Gerant created successfully.');

            return redirect()->route('gerants.index');
        }
    
        return redirect()->back()->with('error', 'Societe not found.');
    }
    
    
 

    // public function store1(Request $request)
    // {

    //     $attributes = request()->validate([
    //         'name' => 'required',
    //         'email' =>'required',
    //         'cin'=>'required',
    //         'role' => 'required',
    //     ]);
    //     if($request->get('email') != Auth::gerant()->email)
    //     {
    //         if(env('IS_DEMO') && Auth::gerant()->id == 1)
    //         {
    //             return redirect()->back()->withErrors(['msg2' => 'You are in a demo version, you can\'t change the email address.']);
                
    //         }
            
    //     }
    //     else{
    //         $attribute = request()->validate([
    //             'email' => ['required', 'email', 'max:50', Rule::unique('gerants')->ignore(Auth::gerant()->id)],
    //         ]);
    //     }
        
        
    //     User::where('id',Auth::user()->id)
    //     ->update([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'cin'=>'required',
    //         'role' => 'required',
    //     ]);
    //     return view('gerants.edit');
    // }

    public function show($id)
    {
        $gerant = Gerant::with('societe')->findOrFail($id);
        return view('gerants.show', compact('gerant'));
    }

    public function edit($id)
    {
        $societes=Societe::all();

        $gerant = Gerant::with('societe')->findOrFail($id);

        return view('gerants.edit', compact('gerant','societes'));
    }


    public function update(Request $request, $id)
    {
        $gerant = Gerant::findOrFail($id);
    
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:gerants,email,' . $gerant->id,
            'cin' => 'required',
            'role' => 'required',
            'societe_id' => 'required|exists:societes,id',
        ]);
    
        $gerant->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'cin' => $request->input('cin'),
            'role' => $request->input('role'),
            'societe_id' => $request->input('societe_id'),
        ]);
        Session::flash('success', 'Gerant updated successfully.');

        // Add this line for Toastr notification
    
        return redirect()->route('gerants.index');
    }
    
    public function search(Request $request)
    {
        $search = $request->search;
    
        $gerants = Gerant::with('societe')
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

    
        return view('gerants.index', compact('gerants', 'search'));
    }

    public function destroy($id)
    {
        $gerants = Gerant::findOrFail($id);
        $gerants->delete();

        return redirect()->route('gerants.index')->with('success', 'Associé deleted successfully');
    }
}
