<?php

namespace App\Imports\Commodities\Excel;

use App\Commodity;
use App\CommodityLocation;
use App\SchoolOperationalAssistance;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Import implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // dd($row);
        $commodity_location = CommodityLocation::where('name', $row['lokasi'])->first();
        $school_operational = SchoolOperationalAssistance::where('name', $row['asal_perolehan'])->first();
        // dd($school_operational);
        return new Commodity([
            'item_code' => $row['kode_barang'],
            'name' => $row['nama_barang'],
            'brand' => $row['merek'],
            'school_operational_assistance_id' => $school_operational->id,
            'commodity_location_id' => $commodity_location->id,
            'condition' => $this->checkCommodityConditions($row['kondisi']),
            'quantity' => $row['kuantitas'],
            'unit' => $row['satuan'],
            'vendor' => $row['vendor'],
            'note' => $row['keterangan']
        ]);
    }

    public function checkCommodityConditions($condition)
    {
        if ($condition === 'Baik') {
            $condition = 1;
        } elseif ($condition === 'Kurang Baik') {
            $condition = 2;
        } else {
            $condition = 3;
        }

        return $condition;
    }
}
