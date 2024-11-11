<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Tambahkan baris ini

class mhsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        DB::table('mhs')->insert(array(
            ['nim' => '22030001',
            'nama' => 'Nadia',
            'prodi' => 'D3TI',
            'angkatan' => '2023'],
            ['nim' => '22030002',
            'nama' => 'Zahra',
            'prodi' => 'D3TI',
            'angkatan' => '2023']
        ));
    }
}
