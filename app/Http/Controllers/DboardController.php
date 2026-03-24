<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DboardController extends Controller
{
    public function dashboard(){
        $dboard = DB::table('dashboard')->get();
        return view('dashboard');

    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        DB::table('dashboard')->insert([
            'id'=> $request->id,
            'title'=> $request->title,
            'description'=> $request->description,
            'date'=> $request->date,
            'status'=> $request->status
        ]);
        return redirect('/dashboard');
    }
}
