<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsoleController extends Controller
{

    public function logout()
    {
        auth()->logout();
        return redirect('/console/dashboard');
    }

    public function loginForm()
    {
        return view('console.login');
    }

    public function login()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt($attributes))
        {
            return redirect('/recipe/add');
        }
        
        return back()
            ->withInput()
            ->withErrors(['email' => 'Invalid email/password combination']);
    }
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function dashboard()
    {
        return view('console.dashboard');
    }
}
