<!DOCTYPE html>
<html lang="en">
<head>
    @vite([
        'resources/css/app.css',
        'resources/css/reset.css'
    ])

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body> 
    <div class="login">
        <form action="/login" class="form_login form" method="post">
            @csrf

            <label for="email">Email</label>
            <input type="email" name="email" id="email">

            <label for="password">Password</label>
            <input type="password" name="password" id="password">

            <input type="submit" value="LOGIN">

            <p class="msg"></p>
        </form>
    </div>
</body>
</html>