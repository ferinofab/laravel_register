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
@php($registered??0)
@if($registered)
    Вход
    <h1>номер уже зарегестрирован войдите</h1>
    <form action="{{route('register.handler')}}" method="post">
        @csrf
        <input type="number" placeholder="number" name="number">
        <input type="text" placeholder="login" name="login">
        <input type="password" placeholder="password" name="password">
        <input type="submit">
    </form>
@else
    Вход
    <form action="{{route('register.handler')}}" method="post">
        @csrf
        <input type="number" placeholder="number" name="number">
        <input type="text" placeholder="login" name="login">
        <input type="password" placeholder="password" name="password">
        <input type="submit">
    </form>
@endif

</body>
</html>
