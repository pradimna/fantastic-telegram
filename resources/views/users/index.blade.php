<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
            
        </thead>
        <tbody>
            <tr>
                @foreach($users as $user)
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                @endforeach
            </tr>
        </tbody>
    </table>
</body>
</html>