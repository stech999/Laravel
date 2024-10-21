<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonParseController extends Controller
{
    //
    public function parseJson(Request $request)
    {
        // var_dump($request->json()->all()); // получить объект
        // var_dump(json_decode($request->getContent())); // можно преорбразовать в объект
        echo $request->json()->get('first_name');
    }
}