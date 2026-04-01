<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
        }

        .container {
            display: flex;

        }

        /* Sidebar */
        x-sidebar {
            width: 250px;
        }

        /* Main content */
        .content {
            flex: 1;
            padding: 20px 20px 20px 10px;
            /* 👈 smaller left padding */
            display: flex;
            margin-left: 500px;
            margin-bottom: 100px;
        }

        .card {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            max-width: 400px;
            width: 100%;
        }

        .card h2 {
            margin-top: 0;
            color: #333;
        }

        .info {
            margin: 10px 0;
            font-size: 16px;
            color: #555;
        }

        .label {
            font-weight: bold;
            color: #222;
        }

        .total {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
            color: #4CAF50;
        }
    </style>
</head>

<body>

    <div class="container">

        <x-sidebar></x-sidebar>

        <div class="content">
            <div class="card">
                <h2>User Dashboard</h2>

                <div class="info">
                    <span class="label">Email:</span> {{ session('user')->email }}
                </div>

                <div class="info">
                    <span class="label">Name:</span> {{ session('user')->name }}
                </div>

                <div class="total">
                    Total: {{$total}}
                </div>
            </div>
        </div>

    </div>

</body>

</html>