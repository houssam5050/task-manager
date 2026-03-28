<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Component</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 280px;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: white;
            transition: all 0.3s ease;
            z-index: 1000;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar-header {
            padding: 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 1rem;
        }

        .sidebar-header h3 {
            margin: 0;
            font-weight: 600;
            font-size: 1.5rem;
        }

        .sidebar-header p {
            margin: 0;
            font-size: 0.85rem;
            opacity: 0.7;
        }

        .sidebar-nav {
            padding: 0 1rem;
        }

        .nav-item {
            list-style: none;
            margin-bottom: 0.5rem;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            color: #e2e8f0;
            text-decoration: none;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .nav-link i {
            margin-right: 1rem;
            font-size: 1.25rem;
            width: 24px;
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            transform: translateX(5px);
        }

        .nav-link.active {
            background: rgba(59, 130, 246, 0.3);
            color: white;
            border-left: 3px solid #3b82f6;
        }

        .logout-item {
            margin-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 1rem;
        }

        .logout-link {
            color: #f87171;
        }

        .logout-link:hover {
            background: rgba(248, 113, 113, 0.1);
            color: #f87171;
        }

        /* Main Content Area */
        .main-content {
            margin-left: 280px;
            padding: 2rem;
            min-height: 100vh;
            background: #f8fafc;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .sidebar.active {
                transform: translateX(0);
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .menu-toggle {
                display: block;
                position: fixed;
                top: 1rem;
                left: 1rem;
                z-index: 1001;
                background: #1e293b;
                color: white;
                border: none;
                padding: 0.5rem 1rem;
                border-radius: 0.5rem;
                cursor: pointer;
            }
        }

        @media (min-width: 769px) {
            .menu-toggle {
                display: none;
            }
        }

        /* Card Styles */
        .dashboard-card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
        }

        .card-icon {
            font-size: 2rem;
            color: #3b82f6;
        }
    </style>
</head>
<body>

<!-- Sidebar Component -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <h3><i class="bi bi-grid-1x2-fill"></i> MyTask</h3>
        <p>Navigation Menu</p>
    </div>
    
    <ul class="sidebar-nav">
        <li class="nav-item">
            <a href="/dashboard" class="nav-link active" data-page="dashboard">
                <i class="bi bi-speedometer2"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="/missions" class="nav-link" data-page="mission">
                <i class="bi bi-rocket-takeoff"></i>
                <span>Mission</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link" data-page="profile">
                <i class="bi bi-person-circle"></i>
                <span>Profile</span>
            </a>
        </li>
        <li class="nav-item logout-item">
            <a href="#" class="nav-link logout-link" id="logoutBtn">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</div>

<button class="menu-toggle" id="menuToggle">
    <i class="bi bi-list"></i> Menu
</button>


</body>
</html>