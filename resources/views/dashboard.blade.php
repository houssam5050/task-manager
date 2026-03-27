<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
        }

        .container {
            display: flex;
        }

        /* Content beside sidebar */
        .content {
            margin-left: 220px; /* adjust based on sidebar width */
            padding: 30px;
            width: 100%;
        }

        h1 {
            margin-bottom: 25px;
        }

        /* Cards container */
        .cards {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        /* Single card */
        .card {
            flex: 1;
            min-width: 200px;
            padding: 20px;
            border-radius: 10px;
            color: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .card h2 {
            margin: 0;
            font-size: 18px;
        }

        .card p {
            font-size: 28px;
            margin-top: 10px;
            font-weight: bold;
        }

        /* Colors */
        .total {
            background: #2c3e50;
        }

        .done {
            background: #2ecc71;
        }

        .pending {
            background: #f39c12;
        }
    </style>
</head>

<body>

<div class="container">

    <!-- Sidebar -->
    <x-sidebar></x-sidebar>

    <!-- Content -->
    <div class="content">
        <h1>Dashboard</h1>

        <div class="cards">
            <div class="card total">
                <h2>Total Missions</h2>
                <p>{{$total}}</p>
            </div>

            <div class="card done">
                <h2>Completed</h2>
                <p>{{$done}}</p>
            </div>

            <div class="card pending">
                <h2>Pending</h2>
                <p>{{$pending}}</p>
            </div>
        </div>
    </div>

</div>

</body>
</html>