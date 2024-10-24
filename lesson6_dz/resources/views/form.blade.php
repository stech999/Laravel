<html>

<head>
    <style>
        .alert {
            color: red;
        }
    </style>
    <title>Урок 6. Работа с формами</title>
</head>

<body>
    <div>
        <form name="add-new-book" action="{{ url('store') }}" method="post">
            @csrf
            <label for="title">Title</label><input type="text" name="title">
            <label for="author">Author</label><input type="text" name="author">
            <label for="genre">Choose Genre: </label>
            <select name="genre">
                <option value="fantasy">Fantasy</option>
                <option value="sci-fi">Sci-fi</option>
                <option value="mystery">Mystery</option>
                <option value="drama">Drama</option>
            </select>
            <button type="submit">Submit</button>
        </form>

        @if ($errors->any())
            <div class="alert">
                @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                @endforeach
            </div>
        @endif
    </div>
</body>

</html>
