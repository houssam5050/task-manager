<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\session;


class DboardController extends Controller
{
    public function missions()
    {
        $dboard = DB::table('dashboard')->get();
        if (!Session::has('user')) {
            return redirect('login');
        }
        return view('missions', compact('dboard'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        DB::table('dashboard')->insert([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'status' => $request->status
        ]);
        return redirect('/missions');
    }

    public function edit($id)
    {
        $dboards = DB::table('dashboard')->where('id', $id)->first();
        return view('edit', compact('dboards'));
    }

   public function update(Request $request, $id)
{
    $data = [];

    if ($request->has('title')) {
        $data['title'] = $request->title;
    }

    if ($request->has('description')) {
        $data['description'] = $request->description;
    }

    if ($request->has('date')) {
        $data['date'] = $request->date;
    }

    if ($request->has('status')) {
        $data['status'] = $request->status;
    }

    DB::table('dashboard')->where('id', $id)->update($data);

    return redirect('/missions');
}

    public function delete($id)
    {
        DB::table('dashboard')->where('id', $id)->delete();
        return redirect('/missions');
    }

    public function dashboard()
    {
        $dboard = DB::table('dashboard')
            ->where('status', 'pending')
            ->get();

        if (!Session::has('user')) {
            return redirect('login');
        }

        return view('dashboard', compact('dboard'));
    }
}
