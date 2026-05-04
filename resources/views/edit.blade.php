<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mission | Task Manager</title>

    <style>
        .form-wrap {
            width: min(720px, 100%);
            margin: 0 auto;
        }

        .form-header {
            margin-bottom: 22px;
        }

        .form-header h1 {
            margin: 0;
            color: var(--ink);
            font-size: clamp(2rem, 5vw, 3rem);
            line-height: 1;
        }

        .form-header p {
            margin: 12px 0 0;
            color: var(--muted);
            line-height: 1.6;
        }

        .form-card {
            padding: 28px;
            border: 1px solid var(--line);
            border-radius: 8px;
            background: #ffffff;
            box-shadow: 0 16px 36px rgba(15, 23, 42, 0.07);
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: var(--ink);
            font-weight: 800;
        }

        input,
        select {
            width: 100%;
            min-height: 46px;
            padding: 10px 12px;
            color: var(--ink);
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            background: #ffffff;
            font: inherit;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.12);
        }

        .submit-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 100%;
            min-height: 48px;
            margin-top: 8px;
            color: #ffffff;
            border: 0;
            border-radius: 8px;
            background: var(--accent);
            cursor: pointer;
            font: inherit;
            font-weight: 900;
            box-shadow: 0 12px 24px rgba(37, 99, 235, 0.18);
        }

        .submit-btn:hover {
            background: var(--accent-dark);
        }
    </style>
</head>

<body>
    <div class="app-shell">
        <x-sidebar></x-sidebar>

        <main class="app-main">
            <div class="form-wrap">
                <header class="form-header">
                    <h1>Edit Mission</h1>
                    <p>Update the mission details and keep its progress accurate.</p>
                </header>

                <section class="form-card">
                    <form action="/update/{{ $dboards->id }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" type="text" name="title" value="{{ $dboards->title }}" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <input id="description" type="text" name="description" value="{{ $dboards->description }}" required>
                        </div>

                        <div class="form-group">
                            <label for="date">Date</label>
                            <input id="date" type="date" name="date" value="{{ $dboards->date }}" required>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select id="status" name="status" required>
                                <option value="pending" {{ $dboards->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="done" {{ $dboards->status == 'done' ? 'selected' : '' }}>Done</option>
                            </select>
                        </div>

                        <button type="submit" class="submit-btn">
                            <i class="bi bi-save2"></i>
                            Update Mission
                        </button>
                    </form>
                </section>
            </div>
        </main>
    </div>
</body>
</html>
