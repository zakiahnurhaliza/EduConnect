<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class HasilKuisSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kuis_id'    => 1,
                'siswa_id'   => 1,
                'skor'       => 80,
                'nama_siswa' => 'Budi'
            ],
            [
                'kuis_id'    => 1,
                'siswa_id'   => 2,
                'skor'       => 90,
                'nama_siswa' => 'Siti'
            ],
            [
                'kuis_id'    => 2,
                'siswa_id'   => 3,
                'skor'       => 70,
                'nama_siswa' => 'Joko'
            ]
        ];

        // Menyisipkan data ke dalam tabel hasil_kuis
        $this->db->table('hasil_kuis')->insertBatch($data);
    }
}
