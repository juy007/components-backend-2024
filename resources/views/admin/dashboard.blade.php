<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Dashboard</h2>
    <form action="{{ route('admin.logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link">Logout</button>
                        </form>
</body>
</html>