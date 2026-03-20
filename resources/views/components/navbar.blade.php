<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .navbar.navbar-improved {
            background: linear-gradient(135deg, #f8f9ff 0%, #eef1fa 100%);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.04), 0 2px 6px rgba(0, 40, 80, 0.05);
            padding-top: 0.7rem;
            padding-bottom: 0.7rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(2px);
            transition: all 0.2s ease;
        }

        .navbar-improved .navbar-brand {
            font-weight: 600;
            font-size: 1.6rem;
            letter-spacing: -0.02em;
            background: linear-gradient(145deg, #1D267D, #5C469C);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            transition: transform 0.15s;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .navbar-improved .navbar-brand i {
            font-size: 1.8rem;
            background: linear-gradient(145deg, #2a2f7e, #674ea7);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .navbar-improved .navbar-brand:hover {
            transform: scale(1.02);
            color: #1D267D;
        }

        .navbar-improved .navbar-nav .nav-link {
            font-weight: 500;
            font-size: 1.1rem;
            padding: 0.5rem 1.2rem !important;
            margin: 0 0.2rem;
            border-radius: 40px;
            color: #2e3b4e;
            transition: all 0.2s ease;
            position: relative;
        }

        .navbar-improved .navbar-nav .nav-link i {
            margin-right: 6px;
            font-size: 0.95rem;
            color: #4a5a72;
            transition: color 0.2s;
        }

        .navbar-improved .navbar-nav .nav-link:hover {
            background-color: rgba(45, 85, 255, 0.08);
            color: #1D267D;
        }

        .navbar-improved .navbar-nav .nav-link:hover i {
            color: #1D267D;
        }

        .navbar-improved .navbar-nav .nav-link.active {
            background: linear-gradient(145deg, #ffffff, #f0f3fe);
            color: #1f2a6b;
            box-shadow: 0 4px 10px rgba(30, 60, 180, 0.15), 0 0 0 1px rgba(90, 110, 230, 0.2);
            font-weight: 600;
        }

        .navbar-improved .navbar-nav .nav-link.active i {
            color: #1f2a6b;
        }

        .navbar-improved .navbar-toggler {
            border: 1px solid rgba(45, 85, 255, 0.2);
            background: rgba(255, 255, 255, 0.5);
            box-shadow: none;
            padding: 0.4rem 0.7rem;
        }

        .navbar-improved .navbar-toggler:focus {
            box-shadow: 0 0 0 4px rgba(80, 100, 240, 0.15);
            border-color: #5C469C;
        }

        .navbar-improved .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(30, 40, 100, 0.7)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .navbar-improved .nav-item:last-child .nav-link {
            margin-right: 0;
        }

        @media (max-width: 991.98px) {
            .navbar-improved .navbar-collapse {
                background: rgba(255, 255, 255, 0.7);
                backdrop-filter: blur(10px);
                border-radius: 28px;
                padding: 0.8rem 1rem;
                margin-top: 0.7rem;
                box-shadow: 0 15px 30px -8px rgba(40, 50, 120, 0.2);
                border: 1px solid rgba(255, 255, 255, 0.7);
            }

            .navbar-improved .navbar-nav .nav-link {
                padding-left: 1.5rem !important;
                border-radius: 40px;
            }
        }

        .navbar-improved .navbar-brand i {
            transition: transform 0.2s;
        }

        .navbar-improved .navbar-brand:hover i {
            transform: rotate(8deg) scale(1.05);
        }

        body {
            background: #f9fafc;
            min-height: 100vh;
        }

        .navbar-improved .container-fluid {
            padding-left: 5%;
            padding-right: 5%;
        }
    </style>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-improved">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <i class="fas fa-check-double"></i> Task Manager
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <i class="fas fa-info-circle"></i> About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">
                            <i class="fas fa-user-plus"></i> Sign Up
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    
</body>
</html>