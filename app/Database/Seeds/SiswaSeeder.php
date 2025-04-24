<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id'    => 1,
                'nama'  => 'Budi',
                'email' => 'budi@example.com'
            ],
            [
                'id'    => 2,
                'nama'  => 'Siti',
                'email' => 'siti@example.com'
            ],
            [
                'id'    => 3,
                'nama'  => 'Joko',
                'email' => 'joko@example.com'
            ]
        ];

        // Menyisipkan data ke dalam tabel siswa
        $this->db->table('siswa')->insertBatch($data);
    }
}
