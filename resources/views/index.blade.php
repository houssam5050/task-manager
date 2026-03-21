<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager · Home</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f5f7fb, #e9eff5);
            color: #1f2d3d;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 2rem;
        }

        /* HERO */
        .hero {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 2rem;
            margin-top: 2rem;
        }

        .hero-text {
            flex: 1;
        }

        .hero-text h1 {
            font-size: 3rem;
            font-weight: 800;
            background: linear-gradient(135deg, #1d267d, #5c469c);
            -webkit-background-clip: text;
            color: transparent;
        }

        .hero-text p {
            font-size: 1.3rem;
            margin: 1rem 0;
            color: #3b4c63;
        }

        .hero-box {
            flex: 1;
            height: 260px;
            border-radius: 20px;
            background: linear-gradient(135deg, #7f9cf5, #5a67d8);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }

        .hero-box img{
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }

        
        .section-title {
            font-size: 2rem;
            margin-top: 3rem;
            font-weight: 700;
        }

        /* CARDS */
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px,1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .card {
            background: white;
            border-radius: 20px;
            padding: 1.5rem;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            transition: 0.2s;
        }

        .card:hover {
            transform: translateY(-8px);
        }

        .card i {
            font-size: 2rem;
            color: #5c469c;
            margin-bottom: 1rem;
        }

        .card h3 {
            margin-bottom: 0.5rem;
        }

        /* IMAGE GRID */
        .images {
            display: flex;
            gap: 1rem;
            margin-top: 3rem;
            flex-wrap: wrap;
            justify-content: center;
        }

        .img-box {
            width: 150px;
            height: 120px;
            background: #c3dafe;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            box-shadow: 0 8px 15px rgba(0,0,0,0.1);
        }

        .cta {
            margin-top: 3rem;
            background: #5c469c;
            color: white;
            padding: 1.5rem;
            border-radius: 40px;
            text-align: center;
            font-size: 1.4rem;
        }
    </style>
</head>

<body>

<x-navbar></x-navbar>

<div class="container">

    <!-- HERO -->
    <div class="hero">
        <div class="hero-text">
            <h1>Task Manager</h1>
            <p><strong>Good place to manage your life</strong></p>
            <p>Control your life details — every task, every plan, every goal.</p>
        </div>

        <div class="hero-box">
            <img src="https://edutrainings.eu/wp-content/uploads/2021/11/life-management.png">
        </div>
    </div>

    <!-- WHY CHOOSE -->
    <div class="section-title">
        Why choose Task Manager?
    </div>

    <div class="cards">

        <div class="card">
            <i class="fas fa-brain"></i>
            <h3>Mental Clarity</h3>
            <p>Stop thinking about everything. Save your tasks and focus on what matters.</p>
        </div>

        <div class="card">
            <i class="fas fa-clock"></i>
            <h3>Manage Time</h3>
            <p>Organize your day and never miss important tasks again.</p>
        </div>

        <div class="card">
            <i class="fas fa-sliders-h"></i>
            <h3>Total Control</h3>
            <p>Control every detail of your life with simple and powerful tools.</p>
        </div>

        <div class="card">
            <i class="fas fa-check-circle"></i>
            <h3>Achieve Goals</h3>
            <p>Turn your plans into achievements step by step.</p>
        </div>

    </div>

    <div class="images">
        <div class="img-box">📋</div>
        <div class="img-box">⏰</div>
        <div class="img-box">🎯</div>
        <div class="img-box">✅</div>
    </div>

    <div class="cta">
        ✨ Control your life details — start today
    </div>

</div>
<x-footer></x-footer>
</body>
</html>