<?php

namespace App\Http\Controllers;

use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;



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

    public function get_excel()
    {
        // TODO: Excel con las categorias

        $date = Carbon::now();
        $nameExcel = "Listado categorias";

        Excel::create( $nameExcel, function ($excel) use ($date) {
            $categories = Category::all();
            $excel->sheet('categorias', function ($sheet) use ($categories, $date) {
                $dataexcel = [];
                $sheet->mergeCells('A1:C1');
                $sheet->getDefaultStyle()
                    ->getAlignment()
                    ->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER)
                    ->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER);
                $sheet->setHeight(1, 30);
                $sheet->row(1, function ($row) {
                    $row->setBackground('#03DCF0');
                    $row->setFont(array(
                        'family' => 'Arial',
                        'size' => '30',
                        'bold' => true,
                        'align' => 'center'
                    ));
                });
                $sheet->row(1, [' RELACION DE CATEGORIAS ']);
                $sheet->row(2, ['']);
                $sheet->row(3, ['Nombre', 'Descripción']);

                $sheet->cells('A3:B3', function ($cells){
                    $cells->setBackground('#01C3F3');
                    $cells->setAlignment('center');
                });

                $i = 0;

                foreach ( $categories as $key => $category )
                {
                    $row = [];
                    $row[0] = $category->name;
                    $row[1] = $category->description;

                    $sheet->appendRow($row);
                    $i += 1;
                }

                $lastIndexRow = 3+$i;

                $sheet->row($lastIndexRow+1, ['']);

                $sheet->row($lastIndexRow+2, ['Fecha/Hora']);

                $sheet->row($lastIndexRow+3, [$date]);

            });


            $excel->sheet('peliculas', function ($sheet) use ($categories) {

            });
        })->export('xlsx');

    }
}
