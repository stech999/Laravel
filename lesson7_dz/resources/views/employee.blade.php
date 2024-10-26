<html>
<head>
    <title>Document</title>
</head>
<body>
    <form name="add-employee" action="{{ Route('save') }}" method="post">
            @csrf
            <label for="title">Name: </label><input type="text" name="name">
            <label for="author">Surname: </label><input type="text" name="surname">
            <label for="author">Email: </label><input type="email" name="email">
            <button type="submit">Submit</button>
        </form>
</body>
</html>