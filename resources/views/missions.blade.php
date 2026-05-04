<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Missions | Task Manager</title>

    <style>
        .page-wrap {
            width: min(1120px, 100%);
            margin: 0 auto;
        }

        .page-header {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 24px;
        }

        .page-header h1 {
            margin: 0;
            color: var(--ink);
            font-size: clamp(2rem, 5vw, 3.1rem);
            line-height: 1;
        }

        .page-header p {
            max-width: 58ch;
            margin: 12px 0 0;
            color: var(--muted);
            line-height: 1.6;
        }

        .add-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            min-height: 44px;
            padding: 0 16px;
            color: #ffffff;
            background: var(--accent);
            border-radius: 8px;
            text-decoration: none;
            font-weight: 800;
            white-space: nowrap;
            box-shadow: 0 12px 24px rgba(37, 99, 235, 0.2);
        }

        .missions-card {
            overflow: hidden;
            border: 1px solid var(--line);
            border-radius: 8px;
            background: #ffffff;
            box-shadow: 0 16px 36px rgba(15, 23, 42, 0.07);
        }

        .table-wrap {
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 760px;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 16px 18px;
            text-align: left;
            border-bottom: 1px solid var(--line);
            vertical-align: middle;
        }

        th {
            color: #64748b;
            background: #f8fafc;
            font-size: 0.78rem;
            font-weight: 900;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        td {
            color: #334155;
        }

        tr:last-child td {
            border-bottom: 0;
        }

        .mission-title {
            color: var(--ink);
            font-weight: 800;
        }

        .status-select {
            width: 130px;
            padding: 8px 10px;
            color: #92400e;
            border: 1px solid #fde68a;
            border-radius: 8px;
            background: #fffbeb;
            cursor: pointer;
            font-weight: 800;
        }

        .action-group {
            display: flex;
            gap: 8px;
        }

        .icon-action {
            display: inline-grid;
            width: 38px;
            height: 38px;
            place-items: center;
            border-radius: 8px;
            text-decoration: none;
            transition: transform 0.18s ease;
        }

        .icon-action:hover {
            transform: translateY(-2px);
        }

        .edit-action {
            color: #1d4ed8;
            background: #dbeafe;
        }

        .delete-action {
            color: #b91c1c;
            background: #fee2e2;
        }

        .empty-state {
            padding: 42px 24px;
            color: var(--muted);
            text-align: center;
        }

        .empty-state i {
            display: block;
            margin-bottom: 12px;
            color: #94a3b8;
            font-size: 2rem;
        }

        @media (max-width: 720px) {
            .page-header {
                align-items: flex-start;
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <div class="app-shell">
        <x-sidebar></x-sidebar>

        <main class="app-main">
            <div class="page-wrap">
                <header class="page-header">
                    <div>
                        <h1>Missions</h1>
                        <p>Review pending missions, adjust their status, and keep the work moving.</p>
                    </div>

                    <a href="/create" class="add-button">
                        <i class="bi bi-plus-lg"></i>
                        Add Mission
                    </a>
                </header>

                <section class="missions-card">
                    @if($dboard->count())
                        <div class="table-wrap">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dboard as $d)
                                        <tr>
                                            <td class="mission-title">{{ $d->title }}</td>
                                            <td>{{ $d->description }}</td>
                                            <td>{{ $d->date }}</td>
                                            <td>
                                                <form action="/update/{{ $d->id }}" method="POST">
                                                    @csrf
                                                    <select class="status-select" name="status" onchange="this.form.submit()">
                                                        <option value="pending" {{ $d->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                        <option value="done" {{ $d->status == 'done' ? 'selected' : '' }}>Done</option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                                <div class="action-group">
                                                    <a class="icon-action edit-action" href="/edit/{{ $d->id }}" aria-label="Edit {{ $d->title }}">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
                                                    <a class="icon-action delete-action" href="/delete/{{ $d->id }}" aria-label="Delete {{ $d->title }}">
                                                        <i class="bi bi-trash3"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="empty-state">
                            <i class="bi bi-clipboard-check"></i>
                            <strong>No pending missions</strong>
                            <p>You are clear for now. Add a new mission when something needs tracking.</p>
                        </div>
                    @endif
                </section>
            </div>
        </main>
    </div>
</body>

</html>
