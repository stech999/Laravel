<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestHeaderController extends Controller
{
    //
    public function getHeader(Request $request)
    {
        $userAgent = $request->header('user-Agent');
        echo $userAgent . ' ';

        if ($request->hasHeader('My-Header')){
            echo $request->header('My-Header');
        }
    }
}
