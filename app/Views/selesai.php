<!-- app/Views/selesai.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kuis Selesai</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #ffe6bf;
        }

        .center-box {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container center-box">
        <h2>Terima kasih sudah mengerjakan kuis!</h2>
        <p>Skor kamu: <strong><?= session()->getFlashdata('skor') ?></strong></p>
        <div class="mt-4">
            <a href="<?= base_url('/') ?>" class="btn btn-success">Kembali ke Beranda</a>
        </div>
    </div>
</body>

</html>