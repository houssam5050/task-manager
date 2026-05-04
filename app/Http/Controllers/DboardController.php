<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class DboardController extends Controller
{
    public function missions()
    {
        if (!Session::has('user')) {
            return redirect('login');
        }

        $dboard = DB::table('dashboard')
            ->where('user_id', Session::get('user')->id)
            ->where('status', 'pending')
            ->get();

        return view('missions', compact('dboard'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        DB::table('dashboard')->insert([
            'user_id' => Session::get('user')->id,
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
        if (!Session::has('user')) {
            return redirect('login');
        }

        $userId = Session::get('user')->id;

        $total = DB::table('dashboard')
            ->where('user_id', $userId)
            ->count();

        $done = DB::table('dashboard')
            ->where('user_id', $userId)
            ->where('status', 'done')
            ->count();

        $pending = DB::table('dashboard')
            ->where('user_id', $userId)
            ->where('status', 'pending')
            ->count();

        $workedDays = DB::table('notebook_days')
            ->where('user_id', $userId)
            ->count();

        $workedThisMonth = DB::table('notebook_days')
            ->where('user_id', $userId)
            ->whereYear('worked_date', now()->year)
            ->whereMonth('worked_date', now()->month)
            ->count();

        $lastWorkedDay = DB::table('notebook_days')
            ->where('user_id', $userId)
            ->orderByDesc('worked_date')
            ->value('worked_date');

        $lastWorkedDayLabel = $lastWorkedDay
            ? Carbon::parse($lastWorkedDay)->format('l j Y')
            : 'No days selected yet';

        return view('dashboard', compact(
            'total',
            'done',
            'pending',
            'workedDays',
            'workedThisMonth',
            'lastWorkedDayLabel'
        ));
    }

    public function profile()
    {
        if (!Session::has('user')) {
            return redirect('login');
        }

        $userId = Session::get('user')->id;
        $db = DB::table('users')->get();
        $total = DB::table('dashboard')
            ->where('user_id', $userId)
            ->count();

        return view('profile', compact('db', 'total'));
    }

    public function notebook(Request $request)
    {
        if (!Session::has('user')) {
            return redirect('login');
        }

        $month = (int) $request->query('month', now()->month);
        $year = (int) $request->query('year', now()->year);

        $month = min(max($month, 1), 12);
        $year = min(max($year, 2020), 2035);

        $startOfMonth = Carbon::create($year, $month, 1)->startOfDay();
        $daysInMonth = $startOfMonth->daysInMonth;
        $userId = Session::get('user')->id;

        $workedDates = DB::table('notebook_days')
            ->where('user_id', $userId)
            ->whereYear('worked_date', $year)
            ->whereMonth('worked_date', $month)
            ->pluck('worked_date')
            ->map(fn ($date) => Carbon::parse($date)->toDateString())
            ->toArray();

        $workedLookup = array_flip($workedDates);
        $days = [];

        for ($day = 1; $day <= $daysInMonth; $day++) {
            $date = Carbon::create($year, $month, $day);

            $days[] = [
                'date' => $date->toDateString(),
                'day' => $day,
                'weekday' => $date->format('D'),
                'label' => $date->format('l j Y'),
                'worked' => isset($workedLookup[$date->toDateString()]),
            ];
        }

        $workedThisMonth = count($workedDates);
        $totalWorkedDays = DB::table('notebook_days')
            ->where('user_id', $userId)
            ->count();

        $lastWorkedDay = DB::table('notebook_days')
            ->where('user_id', $userId)
            ->orderByDesc('worked_date')
            ->value('worked_date');

        $lastWorkedDayLabel = $lastWorkedDay
            ? Carbon::parse($lastWorkedDay)->format('l j Y')
            : 'No days selected yet';

        $monthName = $startOfMonth->format('F');
        $years = range(now()->year - 3, now()->year + 3);

        return view('notebook', compact(
            'days',
            'month',
            'year',
            'years',
            'monthName',
            'workedThisMonth',
            'totalWorkedDays',
            'lastWorkedDayLabel'
        ));
    }

    public function toggleNotebookDay(Request $request)
    {
        if (!Session::has('user')) {
            return redirect('login');
        }

        $request->validate([
            'worked_date' => ['required', 'date'],
            'month' => ['required', 'integer', 'between:1,12'],
            'year' => ['required', 'integer', 'between:2020,2035'],
        ]);

        $userId = Session::get('user')->id;
        $date = Carbon::parse($request->worked_date)->toDateString();

        $existing = DB::table('notebook_days')
            ->where('user_id', $userId)
            ->where('worked_date', $date)
            ->first();

        if ($existing) {
            DB::table('notebook_days')
                ->where('id', $existing->id)
                ->delete();
        } else {
            DB::table('notebook_days')->insert([
                'user_id' => $userId,
                'worked_date' => $date,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return redirect('/notebook?month=' . $request->month . '&year=' . $request->year);
    }
}
