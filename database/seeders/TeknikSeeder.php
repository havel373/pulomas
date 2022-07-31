<?php

namespace Database\Seeders;

use App\Models\Teknik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeknikSeeder extends Seeder
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
                'user_id' => 3,
                'status_pegawai' => "pegawai pmj",
                'nomor_hp' => '087888781238',
                'status' => 'aktiv',
                'created_by' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        );
        foreach ($data as $d) {
            Teknik::create([
                'user_id' => $d['user_id'],
                'status_pegawai' => $d['status_pegawai'],
                'nomor_hp' => $d['nomor_hp'],
                'status' => $d['status'],
                'created_by' => $d['created_by'],
                'created_at' => $d['created_at'],
                'updated_at' => $d['updated_at'],
            ]);
        }
    }
}
