<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestTestController extends Controller
{
    //
    public function testRequest(Request $request)
    {
        // $first_name = $request->input('first_name', 'no name'); // получение данных по одному полю
        // $last_name = $request->input('last_name', 'no name'); // получение данных по одному полю
       // echo $first_name . ' ' . $last_name;

        // $first_name = $request->all(); // второй способ
        // print_r($first_name);

        // $requestParameters = $request->all(); // третий способ
        // echo $requestParameters['first_name'];

        $requestParameters = $request->collect(); // четвертый способ
        // var_dump($requestParameters);

        $requestParameters->each(function ($field) {
            echo $field . ' ';
        });


    }
}