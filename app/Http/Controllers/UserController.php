<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $user = Auth::user();

        return view('sections.Profiles.profile', ['user' => $user]);
    }

    public function storeAddress(Request $request)
    {
        $request->validate([
            'country' => 'required',
            'zipcode' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
        ]);
    
        $user = Auth::user();
    
        $user->address()->create([
            'country' => $request->country,
            'zipcode' => $request->zipcode,
            'state' => $request->state,
            'city' => $request->city,   
            'address' => $request->address,
        ]);
        
        return back()->with('success', 'Address saved successfully.');
    }
    public function RegisterPost(Request $request){
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'dob' => 'required|date',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'password' => Hash::make($request->password),
        ]);
        $user->save();
        Auth::login($user);
        return redirect()->route('home-page');
    }

    public function Register(){
        return view('sections.register');
    }

    public function LoginPost(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        $user = User::where('email', $request->email)->first();
    
        if (!$user) {
            return back()->withErrors([
                'email' => 'Email incorrect',
            ])->withInput();
        }
    
        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors([
                'password' => 'Password incorrect',
            ])->withInput();
        }
    
        Auth::login($user);
    
        return redirect()->route('home-page');
    }

    public function Login(){
        return view('sections.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home-page');
    }
}

