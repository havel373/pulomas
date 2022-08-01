<?php

namespace Database\Seeders;

use App\Models\Rekening;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'nomor_rekening' => '1200003029472',
                'atas_nama' => "PT Pulo Mas Jaya",
            ],
        );
        foreach ($data as $d) {
            Rekening::create([
                'nomor_rekening' => $d['nomor_rekening'],
                'atas_nama' => $d['atas_nama'],
            ]);
        }
    }
}
