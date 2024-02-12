<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;
use App\Models\Societe;
use PDF;
use Illuminate\Support\Facades\Session;
use App\Models\Gerant;
use App\Models\Associé; // Add this line
use App\Models\Impot;

class SocieteController extends Controller
{
 
    public function index()
    {
        //$societes = Societe::paginate(10); 
    /*<div class="text-center">
<nav class="flex items-center justify-center mt-4" aria-label="Page navigation">
{{{ $societes->links() }}}      </nav>
   </div>*/
   $societes = Societe::withCount(['gerants', 'associes'])->simplePaginate(5);
   return view('societes.index', compact('societes'));
    }

    public function create()
    {
        return view('societes.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'formes_juridique' => 'required|unique:societes',
            'siege_social' => 'required',
            'capital' => 'required',
            'activite_principal' => 'required',
            'rc' => 'required',
            'patente' => 'required',
            'if' => 'required',
            'cnss' => 'required',
            'ice' => 'required',
            'rib' => 'required',
            'mode' => 'required|in:liquide,solvable,nosolvable', // Ensure mode is one of these values
            'date_debut_exploitation' => 'required|date',
         ]);

         Societe::create($request->all());
         Session::flash('success', 'Société created successfully.');

        return redirect()->route('societes.index');
    }
    
    public function edit($id)
{
    $societe = Societe::findOrFail($id);
    return view('societes.edit', compact('societe'));
}

public function update(Request $request, $id)
{
    $societes = Societe::findOrFail($id);
    
    $request->validate([
        'name' => 'required',
        'formes_juridique' => 'required',
        'siege_social' => 'required',
        'capital' => 'required',
        'activite_principal' => 'required',
        'rc' => 'required',
        'patente' => 'required',
        'if' => 'required',
        'cnss' => 'required',
        'ice' => 'required',
        'rib' => 'required',
        'mode' => 'required',
        'date_debut_exploitation' => 'required',
    ]);

    $societes->update($request->all());
    Session::flash('success', 'Société updated successfully.');

    return redirect()->route('societes.index');;
}

public function show($id)
{
    $societe = Societe::find($id);

    if (!$societe) {
        abort(404); 
    }

    return view('societes.show', compact('societe'));
}
public function showDetails($societe_id)
{
    // Fetch the societe based on $societe_id
    $societe = Societe::find($societe_id);

    // Fetch all associes for the given societe
    $associes = Associé::where('societe_id', $societe_id)->simplePaginate(5);
    $gerants = Gerant::where('societe_id', $societe_id)->get();

    // Pass the data to the view
    return view('societes.details', compact('societe', 'associes','gerants'));
}
public function details($societe_id)
{
    // Fetch the societe based on $societe_id
    $societe = Societe::find($societe_id);

    // Fetch all associes for the given societe
    $gerants = Gerant::where('societe_id', $societe_id)->simplePaginate(5);

    // Pass the data to the view
    return view('societes.details1', compact('societe','gerants'));
}
public function destroy($id)
{
    $societe = Societe::findOrFail($id);

    // Check if there are associated gerants or associes
    $hasGerants = $societe->gerants()->exists();
    $hasAssocies = $societe->associes()->exists();

    // Display a confirmation alert
    if ($hasGerants || $hasAssocies ) {
        // Display a SweetAlert error message
        Alert::error('Error', 'Cannot delete Société with associated Gerants, Associes.');
        return redirect()->route('societes.index');
    }

    $societe->delete();

    // Display a SweetAlert success message
    Alert::success('Success', 'Société deleted successfully.');
    return redirect()->route('societes.index');
}


public function search(Request $request)
{
    $search = $request->search;

    // Use paginate instead of get to get paginated results
    $societes = Societe::with(['associes', 'gerants'])
        ->where(function ($query) use ($search) {
            $query->where('name', 'like', "%$search%")
                ->orWhere('formes_juridique', 'like', "%$search%")
                ->orWhere('capital', 'like', "%$search%");
        })
        ->paginate(5); // Adjust the number per page as needed

    return view('societes.index', compact('societes', 'search'));
}


public function generatepdf(){
    $societes = Societe::get();

    $pdf = PDF::loadView('societes.index', compact('societes'));

    

    return $pdf->stream('latihanpdf.pdf');
}




}
