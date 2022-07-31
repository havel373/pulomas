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
                'nomor_ktp_penanggungjawab' => '3135678123423091',
                'nomor_npwp' => '3912387236127892',
                'ktp_penanggungjawab' => '',
                'npwp' => '',
                'industri' => json_encode(
                    ["1","2"]
                ),
                'status_tenant' => json_encode(
                    ["2","3"]
                ),
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
                'nomor_ktp_penanggungjawab' => $d['nomor_ktp_penanggungjawab'],
                'nomor_npwp' => $d['nomor_npwp'],
                'ktp_penanggungjawab' => $d['ktp_penanggungjawab'],
                'npwp' => $d['npwp'],
                'industri' => $d['industri'],
                'status_tenant' => $d['status_tenant'],
                'alamat_penanggungjawab' => $d['alamat_penanggungjawab'],
                'created_at' => $d['created_at'],
                'updated_at' => $d['updated_at'],
            ]);
        }
    }
}
