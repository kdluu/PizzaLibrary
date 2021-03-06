<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('users.register');
    }

    public function store(Request $request)
    {
           $request->validate([
               'username' => 'required|string',
               'password' => 'required',
               'confirm' => 'required|same:password',
               'email' => 'required|email',
               'phone' => 'required',
           ]);
            $is_librarian = (isset($_POST['is_librarian'])) ? 1 : 0;
            User::create([
                'username' => $request->get('username'),
                'password' => bcrypt($request->get('password')),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'is_librarian' => $is_librarian,
            ]);
            //\Debugbar::info("just before sending back login page");
            // Session::flash('flash_message', 'Book added successfully!.');
        return redirect('userslogin');
    }
    public function loginForm(Request $request)
    {
        return view('users.login');
    }
    //This get data from login.blade.php
    public function login(Request $request)
    {
        // \Debugbar::info($request);
        $request->validate([
            'username'      =>  'required|string',
            'password'      =>  'required',
        ]);
        //$is_librarian = (isset($_POST['is_librarian'])) ? 1 : 0;
        //Validate with our database
        //\Debugbar::info("just before checking data with database on server");
        if (Auth::attempt(['username'  => $request->username,'password'  => $request->password])) {
            $is_librarian =Auth::user()->is_librarian;
            $name = ($request->username);
            if ($is_librarian == 1) {
               
                return view('users.admin', compact('name'));
            }
            return view('users.student', compact('name'));
        }

        return redirect('userslogin')->with('status', 'Incorrect Credentials!');
    }
}
