<html>

<head>
    <title>Upload File</title>
</head>

<body>
    <form action="{{ Route('uploadFile') }}" name="file-upload" enctype="multipart/form-data" method="POST">
        {{-- <input type="file" name="upload-photo" value="File to upload" > для одного файла --}}
        <input type="file" name="upload_photo[]" value="File to upload" >
        <input type="file" name="upload_photo[]" value="File to upload" >
        <input type="file" name="upload_photo[]" value="File to upload" >
        <input type="submit" value="Send">
        @csrf
    </form>
</body>

</html>
