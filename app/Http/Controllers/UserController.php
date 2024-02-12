<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::user(); // Get the currently authenticated user
        return view('users.profile', compact('user'));
    }

    public function index()
    {
        
        $users = User::simplePaginate(5);
        return view('users.index', compact('users'));
    }
    public function create1()
    {
        return view('users.create1');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }
    public function profile1($id)
    {
        $user = User::findOrFail($id);
        return view('users.profile1', compact('user'));
    }

    public function profile2(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'string',
            'email' => 'string',
            'password' => 'string',
            'role' => 'required',
            'phone' => 'nullable|string|max:20',
            'location' => 'nullable|string|max:50',
            'about_me' => 'nullable|string|max:255',
        ]);

        $user->update($request->all());

        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'string',
            'email' => 'string',
            'password' => 'string',
            'role' => 'required',
            'phone' => 'nullable|string|max:20',
            'location' => 'nullable|string|max:50',
            'about_me' => 'nullable|string|max:255',
        ]);

        $user->update($request->all());

        return redirect()->route('users.index')->with('success', 'Utilisateur updated successfully');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'string',
            'email' => 'string|unique:users',
            'password' => 'string',
            'role'=>'string',
            'phone' => 'nullable|string|max:20',
            'location' => 'nullable|string|max:50',
            'about_me' => 'nullable|string|max:255',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->unhashed_password = $request->input('password'); // Save the unhashed password temporarily
        $user->password = bcrypt($request->input('password')); // Save the hashed password
        $user->role = $request->input('role');

        $user->phone = $request->input('phone');
        $user->location = $request->input('location');
        $user->about_me = $request->input('about_me');

        $user->save();

        return redirect()->route('users.index')->with('success', 'User created successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    
        // Remove the user's ID from the online users list
        $onlineUsers = Cache::get('online-users', []);
        if (isset($onlineUsers[$user->id])) {
            unset($onlineUsers[$user->id]);
            Cache::forever('online-users', $onlineUsers); // Update the cache entry
        }
    
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
    


    public function search(Request $request)
    {
        $search = $request->search;

        $users = User::where(function ($query) use ($search) {
            $query->where('name', 'like', "%$search%")
                ->orWhere('email', 'like', "%$search%")
                ->orWhere('role', 'like', "%$search%");
        })->simplePaginate(5);

        return view('users.index', compact('users', 'search'));
    }

}


