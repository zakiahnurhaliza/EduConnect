<?php

namespace App\Controllers;

use App\Models\KuisModel;
use App\Models\SiswaModel;
use App\Models\HasilKuisModel;

class Kuis extends BaseController
{
    public function index(): string
    {
        return view('kuis');
    }

    public function mulai($mapel)
    {
        $kuisModel = new KuisModel();
        $soal = $kuisModel->where('mata_pelajaran_id', $mapel)->findAll();

        $data = [
            'mapel' => $mapel,
            'soal' => $soal
        ];

        return view('soal', $data);
    }

    public function submit()
    {
        // Ambil data dari form
        $jawaban = $this->request->getPost('jawaban');
        $siswa_id = $this->request->getPost('siswa_id');
        $nama_siswa = $this->request->getPost('name');
        $kuis_id = $this->request->getPost('mata_pelajaran'); // Menggunakan mata pelajaran sebagai kuis_id

        // Kalkulasi skor (contoh sederhana: hitung jawaban benar)
        $skor = 0;
        $kuisModel = new KuisModel();
        foreach ($jawaban as $soal_id => $jawab) {
            $soal = $kuisModel->find($soal_id);  // Ambil soal berdasarkan ID
            if ($soal && $soal['jawaban_benar'] == $jawab) {
                $skor++;  // Skor bertambah jika jawaban benar
            }
        }

        // Menyimpan hasil kuis
        $data = [
            'siswa_id'   => $siswa_id,
            'nama_siswa' => $nama_siswa,
            'kuis_id'    => $kuis_id,
            'skor'       => $skor
        ];

        // Simpan data ke tabel hasil_kuis
        $hasilModel = new HasilKuisModel();
        $hasilModel->simpanHasil($data);

        // Redirect ke halaman selesai
        return redirect()->to(base_url('kuis/selesai'));
    }
}
