<?php

namespace App\Http\Controllers\Commodities;

use PDF;
use App\Commodity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generatePdf()
    {
        $commodities = Commodity::all();
        $sekolah = env('NAMA_SEKOLAH', 'Barang Milik Laboratorium FKIK UNIB');
        $pdf = PDF::loadView('commodities.pdf', compact(['commodities', 'sekolah']))->setPaper('a4');
        // return view('commodities.pdf', compact(['commodities', 'sekolah']));
        return $pdf->download('print.pdf');
    }

    public function generatePdfOne($id)
    {
        $commodity = Commodity::find($id);
        $sekolah = env('NAMA_SEKOLAH', 'Milik Laboratorium FKIK UNIB');
        $pdf = PDF::loadView('commodities.pdfone', compact(['commodity', 'sekolah']))->setPaper('a4');

        return $pdf->download('print.pdf');
    }
}
