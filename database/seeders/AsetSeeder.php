<?php

namespace Database\Seeders;

use App\Models\Aset;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsetSeeder extends Seeder
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
                'nama_gedung' => "Monumen Nasional - B/PGR/220/2020/001/Y",
                'kode_aset' => "GM001",
                'alamat_gedung' => 'Gambir, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_gedung' => "Stadion Utama Gelora Bung Karno - B/PGR/220/2020/001/Y",
                'kode_aset' => "SGBK002",
                'alamat_gedung' => 'Jl. Pintu Satu Senayan, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_gedung' => "Posko Happy - B/PGR/220/2020/001/N",
                'kode_aset' => "HPY01",
                'alamat_gedung' => 'jln nin dulu we',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_gedung' => "Pulomas Office Park POP - AR2/ATB007/114/1998/001/Y",
                'kode_aset' => "AR2/ATB007/114/20/0007/Y",
                'alamat_gedung' => 'Jln. Jend. A. Yani',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        );
        foreach ($data as $d){
            Aset::create([
                'nama_gedung' => $d['nama_gedung'],
                'kode_aset' => $d['kode_aset'],
                'alamat_gedung' => $d['alamat_gedung'],
                'created_at' => $d['created_at'],
                'updated_at' => $d['updated_at'],
            ]);
        }
    }
}
