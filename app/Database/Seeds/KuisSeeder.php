<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KuisSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id'          => 1,
                'judul'       => 'Kuis Matematika',
            ],
            [
                'id'          => 2,
                'judul'       => 'Kuis Bahasa Inggris',
            ]
        ];

        // Menyisipkan data ke dalam tabel kuis
        $this->db->table('kuis')->insertBatch($data);
    }
}
