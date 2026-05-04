<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Task Manager</title>

    <style>
        .profile-wrap {
            width: min(960px, 100%);
            margin: 0 auto;
        }

        .profile-card {
            display: grid;
            grid-template-columns: auto minmax(0, 1fr);
            gap: 24px;
            align-items: center;
            padding: 30px;
            border: 1px solid var(--line);
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.88);
            box-shadow: 0 18px 45px rgba(15, 23, 42, 0.08);
        }

        .avatar {
            display: grid;
            width: 92px;
            height: 92px;
            place-items: center;
            border-radius: 20px;
            color: #ffffff;
            background: linear-gradient(135deg, var(--accent), #0f766e);
            font-size: 2.4rem;
            font-weight: 900;
        }

        .profile-card h1 {
            margin: 0;
            color: var(--ink);
            font-size: clamp(2rem, 5vw, 3rem);
            line-height: 1;
        }

        .profile-card p {
            margin: 10px 0 0;
            color: var(--muted);
        }

        .profile-details {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
            margin-top: 20px;
        }

        .detail-box {
            min-height: 116px;
            padding: 18px;
            border: 1px solid var(--line);
            border-radius: 8px;
            background: #ffffff;
            box-shadow: 0 10px 24px rgba(15, 23, 42, 0.05);
        }

        .detail-box span {
            display: block;
            color: var(--muted);
            font-size: 0.82rem;
            font-weight: 900;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        .detail-box strong {
            display: block;
            margin-top: 12px;
            color: var(--ink);
            font-size: 1.1rem;
            overflow-wrap: anywhere;
        }

        .detail-box.total strong {
            color: var(--success);
            font-size: 2rem;
        }

        @media (max-width: 780px) {
            .profile-card,
            .profile-details {
                grid-template-columns: 1fr;
            }

            .avatar {
                width: 78px;
                height: 78px;
                border-radius: 16px;
            }
        }
    </style>
</head>

<body>
    <div class="app-shell">
        <x-sidebar></x-sidebar>

        <main class="app-main">
            <div class="profile-wrap">
                <section class="profile-card">
                    <div class="avatar">
                        {{ strtoupper(substr(session('user')->name, 0, 1)) }}
                    </div>

                    <div>
                        <h1>{{ session('user')->name }}</h1>
                        <p>Your account summary and mission activity.</p>
                    </div>
                </section>

                <section class="profile-details" aria-label="Profile details">
                    <div class="detail-box">
                        <span>Name</span>
                        <strong>{{ session('user')->name }}</strong>
                    </div>

                    <div class="detail-box">
                        <span>Email</span>
                        <strong>{{ session('user')->email }}</strong>
                    </div>

                    <div class="detail-box total">
                        <span>Total Missions</span>
                        <strong>{{ $total }}</strong>
                    </div>
                </section>
            </div>
        </main>
    </div>
</body>

</html>
