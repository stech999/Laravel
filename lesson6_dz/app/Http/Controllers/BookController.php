<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function store(Request $request)
    {
        $book = new Book($request->all());
        $book->save();

        $request->validate([
            'author' => ['required', 'max: 100'],
            'title' => ['required', 'max: 255']
        ]);

        return response()->json('Book is succesfully validated and data has been saved');
    }
}
