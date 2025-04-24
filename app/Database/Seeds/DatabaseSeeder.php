<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Memanggil seeder masing-masing tabel
        $this->call('SiswaSeeder');
        $this->call('KuisSeeder');
        $this->call('SoalSeeder');
        $this->call('HasilKuisSeeder');
    }
}
