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

    public function edit($id){
        $dboards = DB::table('dashboard')->where('id', $id)->first();
        return view('edit');
    }

    public function update(Request $request, $id){
        DB::table('dashboard')->where('id', $id)->update([
            'title'=> $request->title,
            'description'=> $request->descreption,
            'date'=> $request->date,
            'status'=> $request->status
        ]);
        return redirect('dashboad');
    }
}
