<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Challenge</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>

        body {
            color: #666;
            font-family: 'Nunito', sans-serif;            
        }
        table{
            border-collapse: collapse;
            margin: 50px auto;
            width: 80%;
        }
        table thead tr th {
            color: white;
        }
        table th {
            background-color: #919191;
        }
        table tr:nth-child(even) {
            background-color: #d1d1d1;
        }
        table th,
        table td {
            border: 1px solid #999;
            padding: 10px;
        }
        h1 {
            text-align: center;
        }
        
    </style>

</head>
<body>

    <h1 class="">List All Users</h1>
    <hr>
    <table class="">
        <thead class="">
            <tr>
                <th>ID</th>
                <th>FullName</th>
                <th>Email</th>
                <th>Age</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody class="">
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->fullname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$showDiff = \Carbon\Carbon::parse($user->birthday)->diff(\Carbon\Carbon::now())->format('%y years') }}</td>
                    <td>{{$showDiff = \Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>    

</body>
</html>