<?php

namespace App\Http\Controllers;


use PDF;
use Illuminate\Http\Request;


class PdfGeneratorController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'John',
            'surname' => 'Doe',
            'email' => 'john.doe@email.com',
        ];
        $pdf = PDF::loadView('resume', $data);
        return $pdf->stream('resume.pdf');
    }
}
