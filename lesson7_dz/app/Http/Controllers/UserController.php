<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return Employee::all();
    }
    public function get(Request $request, $id)
    {
        $user = Employee::where('id', $id)->first();
        return $user;
    }
    public function store(Request $request)
    {
        $employee = new Employee($request->all());
        $employee->save();

        $request->validate([
            'name' => ['required', 'max: 50'],
            'surname' => ['required', 'max: 50'],
            'email' => [
                'required',
                'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'
            ]
        ]);

        return 'User save!';
    }
    
}
