<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Project;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Show Login Page
     */
    public function login()
    {
        if (session()->has('admin')) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login');
    }

    /**
     * Authenticate Admin
     */
    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where('username', $request->username)->first();

        if (!$admin) {
            return back()->with('error', 'Invalid username or password.');
        }

        if (!Hash::check($request->password, $admin->password)) {
            return back()->with('error', 'Invalid username or password.');
        }

        session([
            'admin' => true,
            'admin_id' => $admin->id,
            'admin_name' => $admin->username,
        ]);

        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'Welcome Back!');
    }

    /**
     * Dashboard
     */
    public function dashboard()
    {
        $projects = Project::latest()->get();

        return view('admin.dashboard', compact('projects'));
    }

    /**
     * Logout
     */
    public function logout(Request $request)
    {
        $request->session()->forget([
            'admin',
            'admin_id',
            'admin_name',
        ]);

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()
            ->route('admin.login')
            ->with('success', 'Logged out successfully.');
    }

    
}