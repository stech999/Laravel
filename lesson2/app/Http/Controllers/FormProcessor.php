<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessor extends Controller
{
    public function index()
    {
        return view('formprocessor'); //вывод формы в шаблон
    }
    public function store(Request $request)
    {
        $userData = ['first_name' => $request->first_name, 'last_name' => $request->last_name, 'email' => $request->email];
        return response()->json($userData);
    }
    public function getDataFormUser(Request $request)
    {
        $userData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
        ]);

        return view('greeting', ['user' => $userData]);
    }
}
