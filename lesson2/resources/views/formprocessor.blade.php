<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    <h3>Регистрация пользователя</h3>

    {{-- <form action="{{ url('store_form') }}" method="POST"> вывод только JSON --}}
        <form action="{{ url('greeting') }}" method="POST">
        @csrf
        <label for="first_name">Имя</label>
        <input type="text" name="first_name" placeholder="Введите Имя">
        <label for="last_name">Фамилия</label>
        <input type="text" name="last_name" placeholder="Введите Фамилию">
        <label for="email">E-mail</label>
        <input type="text" name="email" placeholder="Введите email">
        <button type="submit">отправить</button>
    </form>

</body>

</html>
