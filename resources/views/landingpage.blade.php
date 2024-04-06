<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Website</title>
</head>
<body>
    <h1>Welcome to Our Website!</h1>
    <p>This is the landing page content. Feel free to customize it as needed.</p>
    <p>If you're a registered user, please <a href="{{ route('login') }}">login</a> to access your dashboard.</p>
    <p>If you don't have an account yet, you can <a href="{{ route('register') }}">register</a> here.</p>
</body>
</html>
