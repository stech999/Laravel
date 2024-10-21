<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    //
    public function showForm()
    {
        return view('upload-form');
    }
    public function fileUpload(Request $request)
    {
        // форма для загррузки одного файла
        // if ($request->hasFile('upload-photo')) {   // имеется ли файл для загрузки
        //     $file = $request->file('upload-photo');
        //     echo $file->path();                    // путь к временному файлу 
        //     echo ' <br>';
        //     echo $file->getClientOriginalName();   // вывод имени файла
        //     echo ' <br>';
        //     echo $file->getClientOriginalExtension(); // расширение файла
        //     $file->storeAs('images', $file->getClientOriginalName()); // создание папки загрузки файлов
        // } else {
        //     echo 'no file uploaded';
        // }
 // несколько файлов
        foreach ($request->upload_photo as $photo) {
            var_dump($photo);
        }
    }
}
