<?php

namespace App\Models;

use CodeIgniter\Model;

class KuisModel extends Model
{
    protected $table = 'kuis';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul'];

    // Method dalam KuisModel
    public function getSoalByKuis($kuis_id)
    {
        $db = \Config\Database::connect();
        return $db->table('soal')
            ->where('kuis_id', $kuis_id)
            ->get()
            ->getResultArray();
    }
}
