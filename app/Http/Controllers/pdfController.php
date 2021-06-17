<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Knp\Snappy\Pdf;


class pdfController extends Controller
{
    public function index(){
        $pdf = \PDF::loadView('pdf.invoice');
        return $pdf->stream('invoice.pdf');



    }
    public function viewpdf(){
        return view('pdf.invoice');
    }
}
