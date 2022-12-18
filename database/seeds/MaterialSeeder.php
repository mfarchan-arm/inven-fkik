<?php

use App\Material;
use App\CommodityLocation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carbon = new Carbon();

        $commodity_locations = CommodityLocation::all();

        $materials = [
            'Meja',
            'Kursi',
            'Kursi Roda Dua',
            'Lemari Kamera',
            'Lemari Buku',
            'Lemari Sepatu',
            'Penghapus Papan Tulis Putih',
            'Meja Guru',
            'Kursi Guru',
            'Rak Sepatu',
            'Rak Peralatan Sekolah',
            'Rak Helm',
            'Rak Sepatu Guru',
            'Rak Helm Guru',
            'Papan Tulis Putih',
            'Papan Tulis Hitam',
            'Kipas Dinding',
            'Kipas Angin Portabel',
            'Kipas Angin',
        ];

        $brands = [
            'IKEA',
            'Livien',
            'iFurnholic',
            'Red Sun',
            'JYSXK',
            'Olympic',
            'Informa',
            "Dove's",
            'Funika',
            'Atria',
            'Vivere',
        ];

        $units = [
            'Unit',
            
        ];

        for ($i = 1; $i <= count($materials); $i++) {
            DB::table('materials')->insert([
                'school_operational_assistance_id' => mt_rand(1, 2),
                'commodity_location_id' => mt_rand(1, count($commodity_locations)),
                'item_code' => 'BRG-' . mt_rand(1000, 9000) . mt_rand(100, 900),
                'name' => $materials[array_rand($materials)],
                'brand' => $brands[array_rand($brands)],
                'condition' => mt_rand(1, 3),
                'quantity' => mt_rand(50, 200),
                'unit' => $units[array_rand($units)],
                'note' => 'Keterangan barang',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
