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
        // Ambil soal berdasarkan mata pelajaran
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
        $mata_pelajaran = $this->request->getPost('mata_pelajaran');
        $siswa_id = $this->request->getPost('siswa_id');       // Ambil dari form
        $nama_siswa = $this->request->getPost('nama_siswa');   // Ambil dari form

        // Hitung skor berdasarkan jawaban siswa
        $skor = 0;
        foreach ($jawaban as $id_soal => $jawaban_siswa) {
            $kuisModel = new KuisModel();
            $soal = $kuisModel->find($id_soal);
            if ($soal && $soal['jawaban_benar'] === $jawaban_siswa) {
                $skor++;
            }
        }

        // Simpan hasil ke dalam tabel hasil_kuis
        $data = [
            'siswa_id' => $siswa_id,
            'nama_siswa' => $nama_siswa,
            'kuis_id' => $mata_pelajaran,
            'skor' => $skor,
        ];

        $hasilModel = new HasilKuisModel();
        $hasilModel->insert($data);  // Simpan hasil kuis

        return redirect()->to(base_url('kuis/selesai'));  // Redirect ke halaman selesai
    }
}
