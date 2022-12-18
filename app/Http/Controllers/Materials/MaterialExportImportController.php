<?php

namespace App\Http\Controllers\Materials;

use App\Http\Controllers\Controller;
use App\Exports\Materials\Excel\Export;
use App\Imports\Materials\Excel\Import;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Material;

class MaterialExportImportController extends Controller
{
    public function export()
    {
        $materials = Material::all();
        
        if(count($materials)!=0)
            return Excel::download(new Export, 'daftar-bahan-' . date('d-m-Y') . '.xlsx');
        return redirect()->back()->withInput()->withErrors('Tidak ada Bahan');
    }

    public function import()
    {
        try {
            Excel::import(new Import, request()->file('file'));
            return redirect()->back()->with('sukses', 'Import bahan Berhasil');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('Gagal, Pastikan Import Data Anda Sesuai');
        }
    }
}
