<?php

namespace App\Http\Controllers;

use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function get_pdf()
    {
        // TODO: Pdf con las categorias
        $categories = Category::with('films')->get();
        $date = Carbon::now();
        $vista = view('pdf.categoriesPDF', compact('categories', 'date'));
        $pdf = app('dompdf.wrapper');
        $pdf->loadHTML($vista);
        return $pdf->stream();
    }
}
