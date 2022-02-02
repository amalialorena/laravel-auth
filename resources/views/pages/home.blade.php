<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{asset('/js/app/js')}}"></script>
    <title>Login</title>
</head>
<body id="app">
hello from home
    <h2>Register:</h2>
    <form action="{{ route('register') }}" method="POST">
        @method('POST')
        @csrf

        <label for="name">name</label>
        <input type="text" name="name"><br>
        <label for="email">email</label>
        <input type="text" name="email"><br>
        <label for="password">Password</label>
        <input type="password" name="password"><br>
        <label for="password-confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation"><br>
        <input type="submit" name="REGISTER">
    </form>
</body>
</html>