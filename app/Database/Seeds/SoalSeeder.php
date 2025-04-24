<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SoalSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // Soal 1
            [
                'kuis_id'       => 1,
                'pertanyaan'    => 'Berapa 5 + 3?',
                'opsi_a'        => '6',
                'opsi_b'        => '7',
                'opsi_c'        => '8',
                'opsi_d'        => '9',
                'jawaban_benar' => 'c', // Jawaban benar adalah opsi c (8)
            ],
            // Soal 2
            [
                'kuis_id'       => 1,
                'pertanyaan'    => 'Berapa hasil dari 9 - 4?',
                'opsi_a'        => '3',
                'opsi_b'        => '5',
                'opsi_c'        => '6',
                'opsi_d'        => '4',
                'jawaban_benar' => 'b', // Jawaban benar adalah opsi b (5)
            ],
            // Soal 3
            [
                'kuis_id'       => 1,
                'pertanyaan'    => 'Apa hasil dari 12 / 4?',
                'opsi_a'        => '2',
                'opsi_b'        => '3',
                'opsi_c'        => '4',
                'opsi_d'        => '5',
                'jawaban_benar' => 'b', // Jawaban benar adalah opsi b (3)
            ],
            // Soal 4
            [
                'kuis_id'       => 1,
                'pertanyaan'    => 'Berapa 6 * 7?',
                'opsi_a'        => '40',
                'opsi_b'        => '42',
                'opsi_c'        => '48',
                'opsi_d'        => '56',
                'jawaban_benar' => 'b', // Jawaban benar adalah opsi b (42)
            ],
            // Soal 5
            [
                'kuis_id'       => 1,
                'pertanyaan'    => 'Berapa akar kuadrat dari 64?',
                'opsi_a'        => '6',
                'opsi_b'        => '7',
                'opsi_c'        => '8',
                'opsi_d'        => '9',
                'jawaban_benar' => 'c', // Jawaban benar adalah opsi c (8)
            ],
            // Soal 6
            [
                'kuis_id'       => 1,
                'pertanyaan'    => 'Apa hasil dari 20 - 15?',
                'opsi_a'        => '4',
                'opsi_b'        => '5',
                'opsi_c'        => '6',
                'opsi_d'        => '7',
                'jawaban_benar' => 'b', // Jawaban benar adalah opsi b (5)
            ],
            // Soal 7
            [
                'kuis_id'       => 1,
                'pertanyaan'    => 'Jika x = 2, maka nilai dari 3x + 4 adalah?',
                'opsi_a'        => '8',
                'opsi_b'        => '9',
                'opsi_c'        => '10',
                'opsi_d'        => '11',
                'jawaban_benar' => 'c', // Jawaban benar adalah opsi c (10)
            ],
            // Soal 8
            [
                'kuis_id'       => 1,
                'pertanyaan'    => 'Berapa hasil dari 15 / 3?',
                'opsi_a'        => '3',
                'opsi_b'        => '4',
                'opsi_c'        => '5',
                'opsi_d'        => '6',
                'jawaban_benar' => 'c', // Jawaban benar adalah opsi c (5)
            ],
            // Soal 9
            [
                'kuis_id'       => 1,
                'pertanyaan'    => 'Jika panjang sisi sebuah persegi adalah 5 cm, berapa luasnya?',
                'opsi_a'        => '15 cm²',
                'opsi_b'        => '20 cm²',
                'opsi_c'        => '25 cm²',
                'opsi_d'        => '30 cm²',
                'jawaban_benar' => 'c', // Jawaban benar adalah opsi c (25 cm²)
            ],
            // Soal 10
            [
                'kuis_id'       => 1,
                'pertanyaan'    => 'Berapa hasil dari 18 + 7?',
                'opsi_a'        => '22',
                'opsi_b'        => '23',
                'opsi_c'        => '24',
                'opsi_d'        => '25',
                'jawaban_benar' => 'd', // Jawaban benar adalah opsi d (25)
            ]
        ];

        // Menyisipkan data ke dalam tabel soal
        $this->db->table('soal')->insertBatch($data);
    }
}
