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
<h1>Регистрация</h1>
<form action="{{route('register.store')}}" method="POST">
    @csrf
    <input type="tel" placeholder="Номер телефона" name="number">
    <input type="text" placeholder="Логин" name="login">
    <input type="text" placeholder="Пароль" name="password" >
    <input type="text" placeholder="Повтор пароля" name="rep_pass">
    <input type="submit">
</form>
<p>Уже есть аккаунт <a href="{{route('register.login', $registered=0)}}">Войти</a>
</p>
</body>
</html>
