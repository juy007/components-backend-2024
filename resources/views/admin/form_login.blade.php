<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Administrator</title>
</head>
<body>
    <!-- resources/views/auth/login.blade.php -->

    <form method="POST" action="{{ url('admin-process-login') }}">
        @csrf
        <input type="email" name="email" placeholder="Email" value="admin@admin.com" required autofocus>
        <input type="password" name="password" value="admin" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    @if($errors->has('email'))
    <div class="alert alert-danger">
        {{ $errors->first('email') }}
    </div>
@endif

</body>
</html>