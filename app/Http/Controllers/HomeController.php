<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Societe;
use App\Models\Associé;
use App\Models\Gerant;
use Illuminate\Support\Facades\Cache;
class HomeController extends Controller
{
    public function Home(){
        return view('home');
    }

    public function Login(){
        return view('login');
    }
    public function About(){
        return view('about');
    }
    public function Contactus(){
        return view('contactus');
    }


    // ------------------------------------------------------


    // $admin = Admin::where('email', $request->input('email'))->first();

    // if ($admin && Hash::check($request->input('your_pass'), $admin->password)) {
    //     Session::put('nom', $admin->nom);
    //     return redirect('/admin-dashboard');
    // }



    public function loginRequest(Request $request)
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        

        $societes = Societe::all()->count();
        $associe = Associé::all()->count();
        $gerants = Gerant::all()->count();

        // Corrected session values
        session(['associe' => $associe]);
        session(['gerants' => $gerants]);
        session(['societes' => $societes]);

        if (Auth::attempt($attributes)) {
            $user = Auth::user();
        
            session()->regenerate();
            session(['user_email' => $user->name]);
        
$onlineUsers = Cache::get('online-users', []);
    session(['onlineUsers' => $onlineUsers]);
   
            // Pass online users to the view
            return redirect()->route('dashboard')->with([
                'societes' => $societes,
                'associe' => $associe,
                'gerants' => $gerants,
                'success' => '',
                'onlineUsers' => $onlineUsers,
            ]);
        }
            
        // If authentication fails
        return back()->withErrors(['email' => 'Email or password invalid.']);
        }

    


    public function logout()

    {
        $user = Auth::user();
    
        $onlineUsers = Cache::get('online-users', []);
        unset($onlineUsers[$user->id]);
        Cache::forever('online-users', $onlineUsers);
    
        Auth::logout();
    
        return redirect('/')->with(['success' => 'You\'ve been logged out.', 'loggedOut' => true]);
    }

    public function SignUp(){
        return view('SignUp');
    }

    public function SignUpRequest(Request $request)
{
    $attributes = request()->validate([
        'name' => ['required', 'max:50'],
        'email' => ['required', 'email', 'max:50', Rule::unique('users', 'email')],
        'password' => ['required', 'min:5', 'max:20'],
        'role' => ['required', Rule::in(['user', 'admin','associé','gérant'])], 

    ]);
    $attributes['password'] = bcrypt($attributes['password'] );

    

    session()->flash('success', 'Your account has been created.');
    $user = User::create($attributes);
    Auth::login($user); 
    return redirect('/Login');
}

        // $admin = Admin::where('email', $request->input('email'))->first();

        // if (!$admin) {
        //     if ($request->input('password') === $request->input('re_pass') && $request->input('type') === "admin") {
        //         $admin = new Admin([
        //             'nom' => $request->input('nom'),
        //             'email' => $request->input('email'),
        //             'password' => Hash::make($request->input('password')),
        //         ]);

        //         $admin->save();

        //         if ($admin->save()) {
        //             return redirect('/Login')->with('success', 'Registration successful. Please log in.');
        //         }
        //     }
        // }
    }


