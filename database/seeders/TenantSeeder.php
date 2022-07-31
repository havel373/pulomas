<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
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
                'user_id' => 2,
                'nama_instansi' => 'tenant 1',
                'nomor_hp_instansi' => '087888781238',
                'nama_penanggungjawab' => "orang",
                'nomor_hp_penanggungjawab' => '081888781238',
                'industri' => json_encode([
                    1 => 'kebun',
                    2 => 'kelapa',
                ]),
                'status_tenant' => json_encode([
                    1 => 'validasi',
                    2 => 'menunggu konfirmasi',
                ]),
                'alamat_penanggungjawab' => 'Jalan jalan no 123',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        );
        foreach ($data as $d) {
            Tenant::create([
                'user_id' => $d['user_id'],
                'nama_instansi' => $d['nama_instansi'],
                'nomor_hp_instansi' => $d['nomor_hp_instansi'],
                'nama_penanggungjawab' => $d['nama_penanggungjawab'],
                'nomor_hp_penanggungjawab' => $d['nomor_hp_penanggungjawab'],
                'industri' => $d['industri'],
                'status_tenant' => $d['status_tenant'],
                'alamat_penanggungjawab' => $d['alamat_penanggungjawab'],
                'created_at' => $d['created_at'],
                'updated_at' => $d['updated_at'],
            ]);
        }
    }
}
