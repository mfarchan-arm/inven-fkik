<?php

namespace App\Http\Controllers\Visits;

use App\Http\Controllers\Controller;
use App\Exports\Visits\Excel\Export;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Visit;

class VisitExportController extends Controller
{
    public function export()
    {
        $visits = Visit::all();
        
        if(count($visits)!=0)
            return Excel::download(new Export, 'daftar-pengunjung-' . date('d-m-Y') . '.xlsx');
        return redirect()->back()->withInput()->withErrors('Tidak ada Barang');
    }

}
