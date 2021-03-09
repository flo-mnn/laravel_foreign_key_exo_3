<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header class="w-100 p-5 mb-5 bg-danger text-light d-flex flex-column justify-content-center align-items-center" height="150">
        <h1>Members</h1>
        <a href="/users/create" class="btn btn-dark">Add a Member</a>
    </header>
    @yield('content')

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>