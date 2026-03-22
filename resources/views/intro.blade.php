<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us · Task Manager</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #eef2ff, #f8fafc);
            color: #1f2d3d;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            padding: 2rem;
        }

        .hero {
            text-align: center;
            margin-top: 2rem;
        }

        .hero h1 {
            font-size: 2.8rem;
            background: linear-gradient(135deg, #1d267d, #5c469c);
            -webkit-background-clip: text;
            color: transparent;
        }

        .hero p {
            font-size: 1.2rem;
            color: #4b5563;
            margin-top: 1rem;
            padding: 10px;
        }

        .section {
            margin-top: 3rem;
        }

        .section h2 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: #1d267d;
        }

        .section p {
            line-height: 1.6;
            color: #374151;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px,1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .feature {
            background: white;
            padding: 1.5rem;
            border-radius: 18px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            text-align: center;
            transition: 0.2s;
        }

        .feature:hover {
            transform: translateY(-6px);
        }

        .feature i {
            font-size: 2rem;
            color: #5c469c;
            margin-bottom: 0.8rem;
        }

       
    </style>
</head>

<body>

<x-navbar></x-navbar>

<div class="container">

    
    <div class="hero">
        <h1><i class="fas fa-info-circle"></i> About Task Manager</h1>
        <p>A simple yet powerful way to organize your life and control every detail.</p>
    </div>

    <div class="section">
        <h2>What is Task Manager?</h2>
        <p>
            Task Manager is a productivity tool designed to help you organize your daily life,
            manage your tasks, and stay focused on your goals. Whether you're planning your day,
            tracking your progress, or building habits, Task Manager gives you full control.
        </p>
    </div>

    <!-- MISSION -->
    <div class="section">
        <h2>Our Mission</h2>
        <p>
            Our mission is to simplify your life by providing a clean and easy way to manage tasks.
            We believe that when your tasks are organized, your mind becomes clear — and success becomes easier.
        </p>
    </div>

    <!-- FEATURES -->
    <div class="section">
        <h2>Key Features</h2>

        <div class="features">

            <div class="feature">
                <i class="fas fa-check-circle"></i>
                <h4>Task Tracking</h4>
                <p>Keep track of everything you need to do.</p>
            </div>

            <div class="feature">
                <i class="fas fa-clock"></i>
                <h4>Time Management</h4>
                <p>Plan your day and use your time wisely.</p>
            </div>

            <div class="feature">
                <i class="fas fa-sliders-h"></i>
                <h4>Full Control</h4>
                <p>Manage every detail of your tasks easily.</p>
            </div>

            <div class="feature">
                <i class="fas fa-lock"></i>
                <h4>Secure</h4>
                <p>Your data is safe and protected.</p>
            </div>

        </div>
    </div>

</div>
<x-footer></x-footer>
</body>
</html>