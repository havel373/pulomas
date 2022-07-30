<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'nama' => "Superadmin",
                'email' => "superadmin@gmail.com",
                'password' => 'password',
                'role' => 'superadmin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => "Tenant",
                'email' => "tenant@gmail.com",
                'password' => 'password',
                'role' => 'tenant',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => "Teknik",
                'email' => "teknik@gmail.com",
                'password' => 'password',
                'role' => 'teknik',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => "Keuangan",
                'email' => "keuangan@gmail.com",
                'password' => 'password',
                'role' => 'keuangan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => "Marketing",
                'email' => "marketing@gmail.com",
                'password' => 'password',
                'role' => 'marketing',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        );
        foreach ($data as $d) {
            User::create([
                'nama' => $d['nama'],
                'email' => $d['email'],
                'password' => Hash::make($d['password']),
                'role' => $d['role'],
                'created_at' => $d['created_at'],
                'updated_at' => $d['updated_at'],
            ]);
        }
    }
}
