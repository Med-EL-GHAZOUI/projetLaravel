<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Main login page with buttons
    public function index()
    {
        return view('login');
    }

    // Main register page with buttons
    public function showRegisterPage()
    {
        return view('register');
    }

    // Show student login page
    public function showLoginStudent()
    {
        return view('loginetu');
    }

    // Show professor login page
    public function showLoginProfessor()
    {
        return view('loginprof');
    }

    // Student login action
    public function loginStudent(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            if ($user->role === 'student') {
                return redirect()->route('devoiretu'); // Redirect to student devoirs
            }
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    // Professor login action
    public function loginProfessor(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            if ($user->role === 'professor') {
                return redirect()->route('devoirprof'); // Redirect to professor devoirs
            }
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    // Show student register page
    public function showRegisterStudent()
    {
        return view('registeretu');
    }

    // Show professor register page
    public function showRegisterProfessor()
    {
        return view('registerprof');
    }

    // Student registration action
    public function registerStudent(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'student',
        ]);

        return redirect()->route('loginetu')->with('success', 'Student registered successfully! Please log in.');
    }

    // Professor registration action
    public function registerProfessor(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'professor',
        ]);

        return redirect()->route('loginprof')->with('success', 'Professor registered successfully! Please log in.');
    }

    // Logout action
    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Logged out successfully!');
    }
}