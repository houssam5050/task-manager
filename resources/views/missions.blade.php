<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Missions</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
        }

        .container {
            display: flex;
        }

        /* Sidebar space */
        .content {
            margin-left: 220px;
            /* adjust depending on sidebar width */
            padding: 30px;
            width: 100%;
        }

        h1 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #2c3e50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e6f2ff;
        }

        .btn {
            padding: 6px 12px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
        }

        .btn-edit {
            background-color: #3498db;
            color: white;
        }

        .btn-delete {
            background-color: #e74c3c;
            color: white;
        }

        .btn-add {
            display: inline-block;
            margin-top: 20px;
            background-color: #2ecc71;
            color: white;
            padding: 10px 15px;
            border-radius: 6px;
            text-decoration: none;
        }

        select {
            padding: 6px 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            cursor: pointer;
        }

        select option[value="pending"] {
            color: orange;
        }

        select option[value="done"] {
            color: green;
        }
    </style>
</head>

<body>

    <div class="container">

        <!-- Sidebar -->
        <x-sidebar></x-sidebar>

        <!-- Content -->
        <div class="content">
            <h1>Manage Your Missions</h1>

            <table>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th colspan="2">Action</th>
                </tr>

                @foreach($dboard as $d)
                <tr>
                    <td>{{$d->title}}</td>
                    <td>{{$d->description}}</td>
                    <td>{{$d->date}}</td>
                    <td>
                        <form action="/update/{{$d->id}}" method="POST">
                            @csrf

                            <select name="status" onchange="this.form.submit()">
                                <option value="pending" {{$d->status == 'pending' ? 'selected' : ''}}>Pending</option>
                                <option value="done" {{$d->status == 'done' ? 'selected' : ''}}>Done</option>
                            </select>
                        </form>
                    </td>
                    <td>
                        <a class="btn btn-edit" href="/edit/{{$d->id}}">Edit</a>
                    </td>
                    <td>
                        <a class="btn btn-delete" href="/delete/{{$d->id}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>

            <a href="/create" class="btn-add">+ Add Mission</a>
        </div>

    </div>

</body>

</html>