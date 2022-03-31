<?php

namespace Database\Seeders;

use App\Models\SubDistrict;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Bancar',
            'Bangilan',
            'Grabagan',
            'Jatirogo',
            'Jenu',
            'Kenduruan',
            'Kerek',
            'Merakurak',
            'Montong',
            'Palang',
            'Parengan',
            'Plumpang',
            'Rengel',
            'Semanding',
            'Senori',
            'Singgahan',
            'Soko',
            'Tambakboyo',
            'Tuban',
            'Widang'
        ];

        foreach ($data as $d) {
            SubDistrict::create([
                'name' => $d,
                'slug' => Str::slug($d)
            ]);
        }
    }
}
