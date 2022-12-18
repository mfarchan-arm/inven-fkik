<?php

namespace App\Exports\Visits\Excel;

use App\Visit;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

class Export implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $visits = Visit::all();

        return collect([
            $this->customProcessDataVisitsToExcel($visits)
        ]);
    }

    public function headings(): array
    {
        return [
            'No.',
            'Nama',
            'NPM',
            'Keterangan',
            'Jam Masuk',
            'Jam Keluar'
        ];
    }

    public function registerEvents(): array
    {

        return [
            AfterSheet::class => function (AfterSheet $event) {
                $cellRange = 'A1:W1';
                $event->sheet->setAllBorders('thin')->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
            }
        ];
    }

    public function customProcessDataVisitsToExcel($model)
    {
        foreach ($model as $key => $visit) {
            $data[$key]['no'] = $key + 1;
            $data[$key]['name'] = $visit->name;
            $data[$key]['npm'] = $visit->npm;
            $data[$key]['description'] = $visit->description;
            $data[$key]['time_in'] = $visit->time_in;
            $data[$key]['created_at'] = $visit->created_at;
        }

        return $data;
    }
}
