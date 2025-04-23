<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Blog;
// use App\Models\Certificate; // if you later add a Certificate model

class ConsoleController extends Controller
{
    /**
     * Show the login form.
     */
    public function loginForm()
    {
        return view('console.login');
    }

    /**
     * Handle login submission.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => ['required','email'],
            'password' => ['required'],
        ]);

        if (auth()->attempt($credentials)) {
            return redirect('/console/dashboard');
        }

        return back()
            ->withInput()
            ->withErrors(['email' => 'Invalid email/password combination']);
    }

    /**
     * Log the user out.
     */
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    /**
     * Display the dashboard with live counts.
     */
    public function dashboard()
    {
        return view('console.dashboard', [
            'projectCount'   => Project::count(),
            'skillCount'     => Skill::count(),
            'educationCount' => Education::count(),
            'blogCount'      => Blog::count(),    //
            // 'certificateCount' => Certificate::count(),
        ]);
    }
}
