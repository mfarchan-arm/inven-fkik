<?php

namespace App\Http\Controllers\Materials;

use PDF;
use App\Material;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generatePdf()
    {
        $materials = Material::all();
        $sekolah = env('NAMA_SEKOLAH', 'Bahan Milik Laboratorium FKIK UNIB');
        $pdf = PDF::loadView('materials.pdf', compact(['materials', 'sekolah']))->setPaper('a4');
        // return view('commodities.pdf', compact(['commodities', 'sekolah']));
        return $pdf->download('print.pdf');
    }

    public function generatePdfOne($id)
    {
        $material = Material::find($id);
        $sekolah = env('NAMA_SEKOLAH', 'Milik Laboratorium FKIK UNIB');
        $pdf = PDF::loadView('commodities.pdfone', compact(['commodity', 'sekolah']))->setPaper('a4');

        return $pdf->download('print.pdf');
    }
}
