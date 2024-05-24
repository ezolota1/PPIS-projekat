<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CovidDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('covid_data')->insert([
            [
                'SPOL' => '1',
                'LE_WBC' => '5.4',
                'Limf' => '1.2',
                'Mid' => '3.2',
                'Gran' => '1.0',
                'HGB' => '14.3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'SPOL' => '0',
                'LE_WBC' => '6.1',
                'Limf' => '1.5',
                'Mid' => '2.9',
                'Gran' => '1.7',
                'HGB' => '13.8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'SPOL' => '1',
                'LE_WBC' => '5.9',
                'Limf' => '1.4',
                'Mid' => '3.0',
                'Gran' => '1.5',
                'HGB' => '15.2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'SPOL' => '0',
                'LE_WBC' => '4.8',
                'Limf' => '1.1',
                'Mid' => '3.5',
                'Gran' => '0.2',
                'HGB' => '12.5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'SPOL' => '1',
                'LE_WBC' => '6.2',
                'Limf' => '1.3',
                'Mid' => '3.1',
                'Gran' => '1.8',
                'HGB' => '14.9',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'SPOL' => '0',
                'LE_WBC' => '5.5',
                'Limf' => '1.0',
                'Mid' => '3.3',
                'Gran' => '1.2',
                'HGB' => '13.2',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
            'SPOL' => '1',
            'LE_WBC' => '5.7',
            'Limf' => '1.3',
            'Mid' => '3.4',
            'Gran' => '1.0',
            'HGB' => '14.7',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'SPOL' => '0',
            'LE_WBC' => '6.5',
            'Limf' => '1.2',
            'Mid' => '3.0',
            'Gran' => '2.3',
            'HGB' => '13.5',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'SPOL' => '1',
            'LE_WBC' => '5.2',
            'Limf' => '1.1',
            'Mid' => '3.3',
            'Gran' => '0.8',
            'HGB' => '15.5',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'SPOL' => '0',
            'LE_WBC' => '6.0',
            'Limf' => '1.4',
            'Mid' => '2.8',
            'Gran' => '2.1',
            'HGB' => '13.0',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'SPOL' => '1',
            'LE_WBC' => '5.6',
            'Limf' => '1.2',
            'Mid' => '3.2',
            'Gran' => '1.2',
            'HGB' => '15.0',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'SPOL' => '0',
            'LE_WBC' => '5.8',
            'Limf' => '1.1',
            'Mid' => '3.1',
            'Gran' => '1.6',
            'HGB' => '13.8',
            'created_at' => now(),
            'updated_at' => now(),
        ],
            ]);
    }
}
