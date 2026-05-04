@php
    $items = [
        [
            'label' => 'Dashboard',
            'url' => '/dashboard',
            'icon' => 'bi-speedometer2',
            'match' => ['dashboard'],
        ],
        [
            'label' => 'Missions',
            'url' => '/missions',
            'icon' => 'bi-list-check',
            'match' => ['missions', 'create', 'edit/*'],
        ],
        [
            'label' => 'Notebook',
            'url' => '/notebook',
            'icon' => 'bi-calendar2-week',
            'match' => ['notebook'],
        ],
        [
            'label' => 'Profile',
            'url' => '/profile',
            'icon' => 'bi-person-circle',
            'match' => ['profile'],
        ],
    ];
@endphp

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

<aside class="app-sidebar" id="sidebar">
    <div class="sidebar-brand">
        <div class="brand-mark">
            <i class="bi bi-check2-square"></i>
        </div>
        <div>
            
            <h3>MyTask</h3>
            
            <p>Plan your day</p>
            
        </div>
    </div>

    <nav class="sidebar-nav" aria-label="Dashboard navigation">
        @foreach($items as $item)
            @php
                $isActive = collect($item['match'])->contains(fn ($pattern) => request()->is($pattern));
            @endphp

            <a href="{{ $item['url'] }}" class="sidebar-link {{ $isActive ? 'active' : '' }}">
                <span class="sidebar-icon"><i class="bi {{ $item['icon'] }}"></i></span>
                <span>{{ $item['label'] }}</span>
                <i class="bi bi-chevron-right sidebar-arrow"></i>
            </a>
        @endforeach
    </nav>

    <form action="/logout" method="post" class="sidebar-logout">
        @csrf
        <button type="submit" class="sidebar-link logout-link">
            <span class="sidebar-icon"><i class="bi bi-box-arrow-right"></i></span>
            <span>Logout</span>
        </button>
    </form>
</aside>

<button class="menu-toggle" id="menuToggle" type="button" aria-controls="sidebar" aria-expanded="false">
    <i class="bi bi-list"></i>
</button>

<style>
    :root {
        --sidebar-width: 280px;
        --ink: #172033;
        --muted: #6b7280;
        --panel: #ffffff;
        --line: #e7ecf3;
        --accent: #2563eb;
        --accent-dark: #1e40af;
        --success: #16a34a;
        --warning: #d97706;
    }

    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        color: var(--ink);
        background:
            radial-gradient(circle at top left, rgba(37, 99, 235, 0.12), transparent 28rem),
            linear-gradient(135deg, #f7fafc 0%, #edf4f8 100%);
        font-family: Inter, "Segoe UI", Arial, sans-serif;
        min-height: 100vh;
    }

    .app-shell {
        min-height: 100vh;
    }

    .app-main {
        margin-left: var(--sidebar-width);
        padding: 32px;
        min-height: 100vh;
    }

    .app-sidebar {
        position: fixed;
        inset: 0 auto 0 0;
        z-index: 1000;
        width: var(--sidebar-width);
        display: flex;
        flex-direction: column;
        padding: 24px 18px;
        color: #f8fafc;
        background: #101827;
        box-shadow: 16px 0 40px rgba(15, 23, 42, 0.12);
    }

    .sidebar-brand {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 8px 8px 24px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }

    .brand-mark {
        display: grid;
        width: 44px;
        height: 44px;
        place-items: center;
        border-radius: 12px;
        background: #2563eb;
        box-shadow: 0 10px 24px rgba(37, 99, 235, 0.35);
        font-size: 1.35rem;
    }

    .sidebar-brand h3 {
        margin: 0;
        font-size: 1.25rem;
        font-weight: 800;
        letter-spacing: 0;
    }

    .sidebar-brand p {
        margin: 2px 0 0;
        color: #9ca3af;
        font-size: 0.88rem;
    }

    .sidebar-nav {
        display: grid;
        gap: 8px;
        padding: 22px 0;
    }

    .sidebar-link {
        position: relative;
        display: flex;
        align-items: center;
        gap: 12px;
        min-height: 48px;
        padding: 10px 12px;
        color: #cbd5e1;
        border: 1px solid transparent;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 700;
        transition: background-color 0.18s ease, color 0.18s ease, border-color 0.18s ease, transform 0.18s ease;
    }

    .sidebar-link:hover,
    .sidebar-link:focus {
        color: #ffffff;
        background: rgba(255, 255, 255, 0.07);
        border-color: rgba(255, 255, 255, 0.1);
        outline: none;
        transform: translateX(3px);
    }

    .sidebar-link.active {
        color: #ffffff;
        background: linear-gradient(135deg, #2563eb 0%, #0f766e 100%);
        border-color: rgba(255, 255, 255, 0.16);
        box-shadow: 0 14px 28px rgba(37, 99, 235, 0.22);
    }

    .sidebar-icon {
        display: grid;
        flex: 0 0 34px;
        width: 34px;
        height: 34px;
        place-items: center;
        border-radius: 8px;
        background: rgba(255, 255, 255, 0.08);
        color: inherit;
        font-size: 1rem;
    }

    .sidebar-arrow {
        margin-left: auto;
        color: currentColor;
        font-size: 0.85rem;
        opacity: 0.5;
    }

    .sidebar-logout {
        margin-top: auto;
        padding-top: 18px;
        border-top: 1px solid rgba(255, 255, 255, 0.08);
    }

    .sidebar-logout button {
        width: 100%;
        background: transparent;
        cursor: pointer;
        font: inherit;
    }

    .logout-link {
        color: #fecaca;
    }

    .logout-link:hover,
    .logout-link:focus {
        color: #ffffff;
        background: rgba(239, 68, 68, 0.18);
        border-color: rgba(248, 113, 113, 0.25);
    }

    .menu-toggle {
        display: none;
        position: fixed;
        top: 18px;
        left: 18px;
        z-index: 1001;
        width: 44px;
        height: 44px;
        border: 0;
        border-radius: 8px;
        color: #ffffff;
        background: #101827;
        box-shadow: 0 10px 24px rgba(15, 23, 42, 0.2);
        cursor: pointer;
        font-size: 1.3rem;
    }

    @media (max-width: 860px) {
        .app-sidebar {
            transform: translateX(-100%);
            transition: transform 0.22s ease;
        }

        .app-sidebar.active {
            transform: translateX(0);
        }

        .app-main {
            margin-left: 0;
            padding: 78px 18px 24px;
        }

        .menu-toggle {
            display: grid;
            place-items: center;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sidebar = document.getElementById('sidebar');
        const toggle = document.getElementById('menuToggle');

        if (!sidebar || !toggle) {
            return;
        }

        toggle.addEventListener('click', function () {
            sidebar.classList.toggle('active');
            toggle.setAttribute('aria-expanded', sidebar.classList.contains('active') ? 'true' : 'false');
        });
    });
</script>
