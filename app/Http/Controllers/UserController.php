<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
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

    public function addForm()
    {

        return view('users.add');

    }

    public function add()
    {

        $attributes = request()->validate([
            'first' => 'required',
            'last' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $user = new User();
        $user->first = $attributes['first'];
        $user->last = $attributes['last'];
        $user->email = $attributes['email'];
        $user->password = bcrypt($attributes['password']);
        $user->save();

        return redirect('/console/login')
            ->with('message', 'User has been added!');

    }
    
}
