<?php

namespace App\Controllers;

use App\Models\KuisModel;
use App\Models\SiswaModel;
use App\Models\HasilKuisModel;
use App\Models\SoalModel;

class Kuis extends BaseController
{
    // Method untuk menampilkan halaman utama kuis
    public function index(): string
    {
        return view('kuis');
    }

    // Method untuk mulai kuis
    public function mulai($kuis_id)
    {
        // Ambil soal berdasarkan ID kuis
        $soalModel = new SoalModel();
        $soal = $soalModel->getSoalByKuis($kuis_id); // Sesuaikan dengan ID kuis

        // Validasi jika soal tidak ditemukan
        if (empty($soal)) {
            return redirect()->back()->with('error', 'Soal untuk kuis ini tidak ditemukan.');
        }

        $data = [
            'kuis_id' => $kuis_id,
            'soal'    => $soal
        ];

        return view('soal', $data);
    }

    // Method untuk menyimpan hasil kuis
    public function submit()
    {
        // Ambil data dari form
        $jawaban = $this->request->getPost('jawaban');
        $kuis_id = $this->request->getPost('kuis_id');
        $siswa_id = $this->request->getPost('siswa_id');

        // Ambil nama siswa dari tabel siswa
        $siswaModel = new SiswaModel();
        $siswa = $siswaModel->find($siswa_id);
        $nama_siswa = $siswa ? $siswa['nama'] : 'Nama tidak ditemukan';

        // Hitung skor berdasarkan jawaban siswa
        $skor = 0;
        $soalModel = new SoalModel();
        foreach ($jawaban as $id_soal => $jawaban_siswa) {
            $soal = $soalModel->find($id_soal);
            if ($soal && strtolower($soal['jawaban_benar']) === strtolower($jawaban_siswa)) {
                $skor++;
            }
        }

        // Simpan hasil ke dalam tabel hasil_kuis
        $hasilModel = new HasilKuisModel();
        $data = [
            'siswa_id' => $siswa_id,
            'nama_siswa' => $nama_siswa,
            'kuis_id' => $kuis_id,
            'skor' => $skor,
        ];
        $hasilModel->insert($data);

        // Kirim skor sebagai flashdata ke halaman selesai
        session()->setFlashdata('skor', $skor);

        return redirect()->to(base_url('kuis/selesai'));
    }

    // Method untuk menampilkan halaman selesai setelah kuis
    public function selesai()
    {
        // Ambil skor yang telah diset sebelumnya
        $skor = session()->getFlashdata('skor');

        // Kirim data skor ke halaman selesai
        return view('selesai', ['skor' => $skor]);
    }
}
