<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    public function index(){
        return view('index');
    }

    public function intro(){
        return view('intro');
    }

    public function create()
    {

        return view('register');
    }

    public function page()
    {
        if (!Session::has('user')) {
            return redirect('login');
        }

        return view('page');
    }

    public function store(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect('login');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $user = DB::table('users')->where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Session::put('user', $user);
            return redirect('page');
        }

        return back()->with('error', 'Invalid email or password');
    }

    public function logout()
    {
        Session::forget('user');
        return redirect('login');
    }
}
