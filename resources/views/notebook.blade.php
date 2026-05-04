<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notebook | Task Manager</title>

    <style>
        .notebook-wrap {
            width: min(1120px, 100%);
            margin: 0 auto;
        }

        .notebook-header {
            display: grid;
            grid-template-columns: minmax(0, 1fr) auto;
            gap: 22px;
            align-items: end;
            margin-bottom: 24px;
            padding: 28px;
            border: 1px solid var(--line);
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.86);
            box-shadow: 0 18px 45px rgba(15, 23, 42, 0.08);
        }

        .notebook-header h1 {
            margin: 0;
            color: var(--ink);
            font-size: clamp(2rem, 5vw, 3.4rem);
            line-height: 1;
        }

        .notebook-header p {
            max-width: 58ch;
            margin: 12px 0 0;
            color: var(--muted);
            line-height: 1.65;
        }

        .date-form {
            display: flex;
            align-items: end;
            gap: 10px;
            padding: 12px;
            border: 1px solid var(--line);
            border-radius: 8px;
            background: #ffffff;
        }

        .date-field label {
            display: block;
            margin-bottom: 6px;
            color: #64748b;
            font-size: 0.75rem;
            font-weight: 900;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .date-field select {
            min-height: 42px;
            padding: 8px 10px;
            color: var(--ink);
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            background: #ffffff;
            font: inherit;
            font-weight: 800;
        }

        .filter-button {
            display: inline-grid;
            width: 42px;
            height: 42px;
            place-items: center;
            color: #ffffff;
            border: 0;
            border-radius: 8px;
            background: var(--accent);
            cursor: pointer;
            font-size: 1.1rem;
        }

        .notebook-stats {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
            margin-bottom: 20px;
        }

        .note-stat,
        .calendar-panel {
            border: 1px solid var(--line);
            border-radius: 8px;
            background: #ffffff;
            box-shadow: 0 12px 28px rgba(15, 23, 42, 0.06);
        }

        .note-stat {
            padding: 20px;
        }

        .note-stat span {
            display: block;
            color: var(--muted);
            font-size: 0.82rem;
            font-weight: 900;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .note-stat strong {
            display: block;
            margin-top: 12px;
            color: var(--ink);
            font-size: 2.1rem;
            line-height: 1;
        }

        .note-stat p {
            margin: 10px 0 0;
            color: var(--muted);
        }

        .calendar-panel {
            overflow: hidden;
        }

        .calendar-title {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 20px 22px;
            border-bottom: 1px solid var(--line);
            background: #f8fafc;
        }

        .calendar-title h2 {
            margin: 0;
            color: var(--ink);
            font-size: 1.25rem;
        }

        .calendar-title p {
            margin: 0;
            color: var(--muted);
            font-weight: 800;
        }

        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, minmax(86px, 1fr));
            gap: 10px;
            padding: 18px;
            overflow-x: auto;
        }

        .day-card {
            min-height: 96px;
            width: 100%;
            padding: 12px;
            color: var(--ink);
            border: 1px solid var(--line);
            border-radius: 8px;
            background: #ffffff;
            cursor: pointer;
            text-align: left;
            transition: transform 0.18s ease, border-color 0.18s ease, background-color 0.18s ease;
        }

        .day-card:hover {
            border-color: #bfdbfe;
            transform: translateY(-2px);
        }

        .day-card.worked {
            color: #ffffff;
            border-color: transparent;
            background: linear-gradient(135deg, var(--accent), #0f766e);
            box-shadow: 0 12px 24px rgba(37, 99, 235, 0.18);
        }

        .day-week {
            display: block;
            margin-bottom: 14px;
            color: inherit;
            font-size: 0.78rem;
            font-weight: 900;
            letter-spacing: 0.06em;
            opacity: 0.72;
            text-transform: uppercase;
        }

        .day-number {
            display: block;
            font-size: 1.8rem;
            font-weight: 900;
            line-height: 1;
        }

        .day-status {
            display: block;
            margin-top: 10px;
            color: inherit;
            font-size: 0.8rem;
            font-weight: 900;
            opacity: 0.78;
        }

        @media (max-width: 980px) {
            .notebook-header,
            .notebook-stats {
                grid-template-columns: 1fr;
            }

            .date-form {
                width: 100%;
                flex-wrap: wrap;
            }
        }
    </style>
</head>

<body>
    <div class="app-shell">
        <x-sidebar></x-sidebar>

        <main class="app-main">
            <div class="notebook-wrap">
                <section class="notebook-header">
                    <div>
                        <h1>Notebook</h1>
                        <p>Choose the days you worked. Click a day to mark it, and click it again to remove it from your worked days.</p>
                    </div>

                    <form action="/notebook" method="GET" class="date-form">
                        <div class="date-field">
                            <label for="month">Month</label>
                            <select id="month" name="month">
                                @for($m = 1; $m <= 12; $m++)
                                    <option value="{{ $m }}" {{ $month == $m ? 'selected' : '' }}>
                                        {{ \Carbon\Carbon::create($year, $m, 1)->format('F') }}
                                    </option>
                                @endfor
                            </select>
                        </div>

                        <div class="date-field">
                            <label for="year">Year</label>
                            <select id="year" name="year">
                                @foreach($years as $optionYear)
                                    <option value="{{ $optionYear }}" {{ $year == $optionYear ? 'selected' : '' }}>{{ $optionYear }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="filter-button" aria-label="Show month">
                            <i class="bi bi-arrow-right"></i>
                        </button>
                    </form>
                </section>

                <section class="notebook-stats" aria-label="Notebook statistics">
                    <div class="note-stat">
                        <span>This Month</span>
                        <strong>{{ $workedThisMonth }}</strong>
                        <p>worked days in {{ $monthName }} {{ $year }}</p>
                    </div>

                    <div class="note-stat">
                        <span>All Time</span>
                        <strong>{{ $totalWorkedDays }}</strong>
                        <p>worked days saved</p>
                    </div>

                    <div class="note-stat">
                        <span>Last Worked Day</span>
                        <p>{{ $lastWorkedDayLabel }}</p>
                    </div>
                </section>

                <section class="calendar-panel">
                    <div class="calendar-title">
                        <h2>{{ $monthName }} {{ $year }}</h2>
                        <p>Days marked blue are worked days</p>
                    </div>

                    <div class="calendar-grid">
                        @foreach($days as $day)
                            <form action="/notebook/toggle" method="POST">
                                @csrf
                                <input type="hidden" name="worked_date" value="{{ $day['date'] }}">
                                <input type="hidden" name="month" value="{{ $month }}">
                                <input type="hidden" name="year" value="{{ $year }}">

                                <button type="submit" class="day-card {{ $day['worked'] ? 'worked' : '' }}" title="{{ $day['label'] }}">
                                    <span class="day-week">{{ $day['weekday'] }}</span>
                                    <span class="day-number">{{ $day['day'] }}</span>
                                    <span class="day-status">{{ $day['worked'] ? 'Worked' : 'Select' }}</span>
                                </button>
                            </form>
                        @endforeach
                    </div>
                </section>
            </div>
        </main>
    </div>
</body>

</html>
