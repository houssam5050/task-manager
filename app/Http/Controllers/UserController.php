<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function create(){
        $users = DB::table('users')->first();
        return view('register');
    }

    public function store(Request $request){
        DB::table('users')->insert([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=>$request->password
        ]);
        return redirect('/page');
    }
}
