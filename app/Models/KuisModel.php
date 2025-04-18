<?php

namespace App\Models;

use CodeIgniter\Model;

class KuisModel extends Model
{
    protected $table = 'kuis';
    protected $primaryKey = 'id';
    protected $allowedFields = ['mata_pelajaran_id', 'pertanyaan', 'opsi_a', 'opsi_b', 'opsi_c', 'opsi_d', 'jawaban_benar'];

    // Ambil semua soal berdasarkan mata pelajaran
    public function getSoalByMapel($mata_pelajaran_id)
    {
        return $this->where('mata_pelajaran_id', $mata_pelajaran_id)->findAll();
    }

    // Simpan jawaban siswa ke tabel hasil_kuis
    public function saveJawaban($data)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('hasil_kuis');
        return $builder->insert($data);
    }
}
