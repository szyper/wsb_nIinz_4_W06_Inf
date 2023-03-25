<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="login" method="post">
    @csrf
    <input type="text" name="user" placeholder="Podaj login użytkownika" autofocus><br><br>
    <input type="password" name="password" placeholder="Podaj hasło"><br><br>
    <input type="submit" value="Zaloguj się">
    <hr>
</form>
</body>
</html>
