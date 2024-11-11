<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Prodi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prodi')->insert([
            [
                'kode_prodi' => 'D3TI',
                'nama_prodi' => 'Teknik Informatika',
                'jenjang' => 'D3'
            ],
            [
                'kode_prodi' => 'D4SIKC',
                'nama_prodi' => 'SistemInformasiKotaCerdas',
                'jenjang' => 'D4'
            ],
            [
                'kode_prodi' => 'D3TM',
                'nama_prodi' => 'Teknik Mesin',
                'jenjang' => 'D3'
            ],
            [
                'kode_prodi' => 'D3KP',
                'nama_prodi' => 'Keperawatan',
                'jenjang' => 'D3'
            ],
            [
                'kode_prodi' => 'D4RPL',
                'nama_prodi' => 'Rekayasa Perangkat Lunak',
                'jenjang' => 'D4'
            ],
            [
                'kode_prodi' => 'D4PM',
                'nama_prodi' => 'Perancangan Manufaktur',
                'jenjang' => 'D4'
            ],
            [
                'kode_prodi' => 'D3TPTU',
                'nama_prodi' => 'Teknik Pendingin dan Tata Udara',
                'jenjang' => 'D3'
            ],


        ]);
    }
}
