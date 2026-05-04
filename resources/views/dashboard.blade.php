<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Task Manager</title>

    <style>
        .dashboard-wrap {
            width: min(1120px, 100%);
            margin: 0 auto;
        }

        .dashboard-hero {
            display: grid;
            grid-template-columns: minmax(0, 1fr) auto;
            gap: 24px;
            align-items: center;
            margin-bottom: 26px;
            padding: 28px;
            border: 1px solid var(--line);
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.82);
            box-shadow: 0 18px 45px rgba(15, 23, 42, 0.08);
            backdrop-filter: blur(10px);
        }

        .eyebrow {
            margin: 0 0 8px;
            color: var(--accent);
            font-size: 0.78rem;
            font-weight: 800;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .dashboard-hero h1 {
            margin: 0;
            color: var(--ink);
            font-size: clamp(2rem, 5vw, 3.6rem);
            line-height: 1;
            letter-spacing: 0;
        }

        .dashboard-hero p {
            max-width: 58ch;
            margin: 14px 0 0;
            color: var(--muted);
            font-size: 1rem;
            line-height: 1.65;
        }

        .primary-action {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            min-height: 46px;
            padding: 0 18px;
            color: #ffffff;
            background: var(--accent);
            border-radius: 8px;
            text-decoration: none;
            font-weight: 800;
            box-shadow: 0 14px 28px rgba(37, 99, 235, 0.22);
            transition: transform 0.18s ease, background-color 0.18s ease;
            white-space: nowrap;
        }

        .primary-action:hover {
            color: #ffffff;
            background: var(--accent-dark);
            transform: translateY(-2px);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
            margin-bottom: 24px;
        }

        .stat-card {
            position: relative;
            min-height: 170px;
            padding: 22px;
            overflow: hidden;
            border: 1px solid var(--line);
            border-radius: 8px;
            background: var(--panel);
            box-shadow: 0 12px 28px rgba(15, 23, 42, 0.06);
        }

        .stat-card::after {
            content: "";
            position: absolute;
            inset: auto 18px 0 18px;
            height: 4px;
            border-radius: 999px 999px 0 0;
            background: var(--card-color);
        }

        .stat-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 14px;
        }

        .stat-icon {
            display: grid;
            width: 46px;
            height: 46px;
            place-items: center;
            border-radius: 8px;
            color: var(--card-color);
            background: var(--card-soft);
            font-size: 1.35rem;
        }

        .stat-card h2 {
            margin: 0;
            color: #475569;
            font-size: 0.95rem;
            font-weight: 800;
        }

        .stat-value {
            margin: 24px 0 8px;
            color: var(--ink);
            font-size: 3rem;
            line-height: 1;
            font-weight: 900;
        }

        .stat-note {
            margin: 0;
            color: var(--muted);
            font-size: 0.95rem;
        }

        .total-card {
            --card-color: #2563eb;
            --card-soft: #dbeafe;
        }

        .done-card {
            --card-color: #16a34a;
            --card-soft: #dcfce7;
        }

        .pending-card {
            --card-color: #d97706;
            --card-soft: #fef3c7;
        }

        .dashboard-panel {
            display: grid;
            grid-template-columns: minmax(0, 1.2fr) minmax(260px, 0.8fr);
            gap: 18px;
        }

        .panel-box {
            padding: 24px;
            border: 1px solid var(--line);
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.86);
            box-shadow: 0 12px 28px rgba(15, 23, 42, 0.05);
        }

        .panel-box h2 {
            margin: 0 0 16px;
            color: var(--ink);
            font-size: 1.15rem;
        }

        .progress-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            color: #475569;
            font-weight: 800;
        }

        .progress-track {
            height: 12px;
            margin: 14px 0 10px;
            overflow: hidden;
            border-radius: 999px;
            background: #e5e7eb;
        }

        .progress-fill {
            width: {{ $total > 0 ? round(($done / $total) * 100) : 0 }}%;
            height: 100%;
            border-radius: inherit;
            background: linear-gradient(90deg, var(--success), var(--accent));
        }

        .quick-links {
            display: grid;
            gap: 10px;
        }

        .quick-link {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            min-height: 48px;
            padding: 12px 14px;
            color: var(--ink);
            border: 1px solid var(--line);
            border-radius: 8px;
            background: #ffffff;
            text-decoration: none;
            font-weight: 800;
            transition: transform 0.18s ease, border-color 0.18s ease;
        }

        .quick-link:hover {
            color: var(--accent-dark);
            border-color: #bfdbfe;
            transform: translateY(-2px);
        }

        @media (max-width: 980px) {
            .stats-grid,
            .dashboard-panel,
            .dashboard-hero {
                grid-template-columns: 1fr;
            }

            .primary-action {
                width: fit-content;
            }
        }

        @media (max-width: 560px) {
            .dashboard-hero,
            .stat-card,
            .panel-box {
                padding: 20px;
            }

            .stats-grid {
                gap: 12px;
            }
        }
    </style>
</head>

<body>
    <div class="app-shell">
        <x-sidebar></x-sidebar>

        <main class="app-main">
            <div class="dashboard-wrap">
                <section class="dashboard-hero">
                    <div>
                        <p class="eyebrow">Workspace overview</p>
                        <h1>Dashboard</h1>
                        <p>Track mission progress, see what is still waiting, and jump quickly into the work that needs attention.</p>
                    </div>

                    <a href="/create" class="primary-action">
                        <i class="bi bi-plus-lg"></i>
                        Add Mission
                    </a>
                </section>

                <section class="stats-grid" aria-label="Mission statistics">
                    <article class="stat-card total-card">
                        <div class="stat-top">
                            <h2>Total Missions</h2>
                            <span class="stat-icon"><i class="bi bi-stack"></i></span>
                        </div>
                        <p class="stat-value">{{ $total }}</p>
                        <p class="stat-note">All missions in your workspace</p>
                    </article>

                    <article class="stat-card done-card">
                        <div class="stat-top">
                            <h2>Completed</h2>
                            <span class="stat-icon"><i class="bi bi-check2-circle"></i></span>
                        </div>
                        <p class="stat-value">{{ $done }}</p>
                        <p class="stat-note">Finished and marked done</p>
                    </article>

                    <article class="stat-card pending-card">
                        <div class="stat-top">
                            <h2>Pending</h2>
                            <span class="stat-icon"><i class="bi bi-hourglass-split"></i></span>
                        </div>
                        <p class="stat-value">{{ $pending }}</p>
                        <p class="stat-note">Waiting for your next move</p>
                    </article>
                </section>

                <section class="dashboard-panel">
                    <div class="panel-box">
                        <h2>Completion Rate</h2>
                        <div class="progress-row">
                            <span>{{ $total > 0 ? round(($done / $total) * 100) : 0 }}% complete</span>
                            <span>{{ $done }} / {{ $total }}</span>
                        </div>
                        <div class="progress-track" aria-hidden="true">
                            <div class="progress-fill"></div>
                        </div>
                        <p class="stat-note">Completed missions update this progress automatically.</p>
                    </div>

                    <div class="panel-box">
                        <h2>Quick Actions</h2>
                        <div class="quick-links">
                            <a href="/missions" class="quick-link">
                                <span><i class="bi bi-list-check"></i> View Missions</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                            <a href="/profile" class="quick-link">
                                <span><i class="bi bi-person-circle"></i> Open Profile</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
</body>
</html>
