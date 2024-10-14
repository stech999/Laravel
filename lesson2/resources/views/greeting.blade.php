<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Привет {{ $user['first_name'] }}!</h1>
        <h2>твой профиль</h2>
        <h2>Имя: {{ $user['first_name'] }}!</h2>
        <h2>Фамилия: {{ $user['last_name'] }}!</h2>
        <h2>E-mail: {{ $user['email'] }}!</h2>
    </div>
</body>

</html>
