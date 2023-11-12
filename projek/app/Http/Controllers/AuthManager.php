<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Ganti 'login' dengan nama view login Anda
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('home'); // Ganti 'home' dengan rute tujuan setelah login
        }

        return back()->withErrors(['login' => 'Login failed. Please check your credentials.']);
    }

    public function showRegistrationForm()
    {
        return view('register'); // Ganti 'register' dengan nama view registrasi Anda
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'no_hp' => 'required',
        ]);

        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_hp' => $request->no_hp,
        ]);

        if ($user) {
            Auth::login($user);
            return redirect('/'); // Ganti 'home' dengan rute tujuan setelah registrasi/login
        } else {
            return back()->withErrors(['registration' => 'Registration failed. Please try again.']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login'); // Ganti 'login' dengan rute tujuan setelah logout
    }
}


// namespace App\Http\Controllers;

// use App\Models\User;
// use Illuminate\Http\Request;
// use Illuminate\Validation\Rule;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Session;

// class AuthManager extends Controller
// {
//     function halamanlogin(){
//         if(Auth::check()){
            
//         }
//         return view('halamanlogin');
//     }

//     function halamanregister(){
//         if(Auth::check()){
//             return redirect(route('home'));
//         }
//         return view('halamanregister');
//     }

//     //retrieve data from form
//     function loginPost(Request $request){
//         $request->validate([
//             'email' => 'required',
//             'password' => 'required'
//         ]);

//         $minta = $request->only('email', 'password');
//         if(Auth::attempt($minta)){
//             return redirect()->intended(route('home'))->with("success", "Access Granted!");
//         }
//         return redirect(route('halamanlogin'))->with("error", "Login Invalid!");
//     }

//     function registerPost(Request $request){
//         $request->validate([
//             'nama' => 'required',
//             'email' => 'required|email|unique:users',
//             'password' => 'required|min:8',
//             'no_hp' => 'required',
//         ]);

//         $user = User::create([
//             'nama' => $request->nama,
//             'email' => $request->email,
//             'password' => Hash::make($request->password),
//             'no_hp' => $request->no_hp,
//         ]);
//         if(!$user){
//             return redirect(route('welcome'))->with("error", "Registration Failed, try again!");
//         }
//         return redirect(route('halamanlogin'))->with( "success", "Registration Success!");

//     }

//     function logout(){
//         Session::flush();
//         Auth::logout();
//         return redirect(route('halamanlogin'));

//     }

// }