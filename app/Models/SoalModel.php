<?php

namespace App\Models;

use CodeIgniter\Model;

class SoalModel extends Model
{
    protected $table = 'soal';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'kuis_id',
        'pertanyaan',
        'opsi_a',
        'opsi_b',
        'opsi_c',
        'opsi_d',
        'jawaban_benar'
    ];

    // Ambil semua soal berdasarkan kuis_id
    // Method dalam SoalModel
    public function getSoalByKuis($kuis_id)
    {
        return $this->where('kuis_id', $kuis_id)->findAll();
    }
}
