<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register · Task Manager</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #eef2ff, #dbeafe);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .register-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .register-card {
            background: white;
            padding: 2.5rem 2rem;
            border-radius: 20px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .register-card h1 {
            margin-bottom: 0.5rem;
            font-size: 2rem;
            color: #1d267d;
        }

        .register-card p {
            color: #6b7280;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.2rem;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.3rem;
            font-size: 0.9rem;
            color: #374151;
        }

        .form-group input {
            width: 100%;
            padding: 0.7rem;
            border-radius: 10px;
            border: 1px solid #d1d5db;
            font-size: 1rem;
            transition: 0.2s;
        }

        .form-group input:focus {
            outline: none;
            border-color: #5c469c;
            box-shadow: 0 0 0 3px rgba(92, 70, 156, 0.2);
        }

        .register-btn {
            width: 100%;
            padding: 0.8rem;
            background: linear-gradient(135deg, #1d267d, #5c469c);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s;
        }

        .register-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .extra-links {
            margin-top: 1rem;
            font-size: 0.9rem;
        }

        .extra-links a {
            color: #5c469c;
            text-decoration: none;
            font-weight: 500;
        }

        .extra-links a:hover {
            text-decoration: underline;
        }

        .error {
            background: #fee2e2;
            color: #b91c1c;
            padding: 0.7rem;
            border-radius: 10px;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>

    <x-navbar></x-navbar>

    <div class="register-container">
        <div class="register-card">

            <h1><i class="fas fa-user-plus"></i> Create Account</h1>
            <p>Start managing your life and tasks today</p>

            {{-- Example error block (optional if you use validation) --}}
            @if($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
            @endif

            <form action="/register" method="post">
                @csrf

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="name" placeholder="Enter your name" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Create a password" required>
                </div>

                <button type="submit" class="register-btn">
                    <i class="fas fa-user-check"></i> Register
                </button>
            </form>

            <div class="extra-links">
                <a href="/login">Login</a>
            </div>

        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>