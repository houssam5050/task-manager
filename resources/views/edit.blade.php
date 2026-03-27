<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mission</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
        }

        .container {
            display: flex;
        }

        /* Sidebar width (must match your sidebar) */
        .sidebar {
            width: 220px;
        }

        /* Content area */
        .content {
            margin-left: 220px; /* same as sidebar */
            padding: 40px 60px; /* space from sidebar */
            width: 100%;
        }

        h1 {
            margin-bottom: 20px;
        }

        /* Card */
        .form-card {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            max-width: 500px;
            margin: 40px auto; /* center the card */
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #3498db;
        }

        .btn {
            margin-top: 15px;
            padding: 12px;
            width: 100%;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>

<div class="container">

    <!-- Sidebar -->
    <div class="sidebar">
        <x-sidebar></x-sidebar>
    </div>

    <!-- Content -->
    <div class="content">
        <h1>Edit Mission</h1>

        <div class="form-card">
            <form action="/update/{{$dboards->id}}" method="POST">
                @csrf

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" value="{{$dboards->title}}" required>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" value="{{$dboards->description}}" required>
                </div>

                <div class="form-group">
                    <label>Date</label>
                    <input type="date" name="date" value="{{$dboards->date}}" required>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status" required>
                        <option value="pending" {{$dboards->status == 'pending' ? 'selected' : ''}}>Pending</option>
                        <option value="done" {{$dboards->status == 'done' ? 'selected' : ''}}>Done</option>
                    </select>
                </div>

                <button type="submit" class="btn">Update Mission</button>
            </form>
        </div>
    </div>

</div>

</body>
</html>