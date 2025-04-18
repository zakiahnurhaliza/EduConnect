<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'siswa'; // Nama tabel
    protected $primaryKey = 'id'; // Kolom primary key
    protected $allowedFields = ['nama', 'siswa_id'];
}
