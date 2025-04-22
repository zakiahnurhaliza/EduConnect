<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Kuis Siswa</title>

   <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
   <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
   <link rel="stylesheet" href="<?= base_url('css/responsive.css') ?>">
   <link rel="icon" href="<?= base_url('images/logotab.png') ?>" type="image/gif" />
</head>

<body>
   <div class="container">
      <h1 class="text-center mt-4">Kuis Mata Pelajaran</h1>

      <form action="<?= base_url('kuis/submit') ?>" method="POST">

         <!-- Input identitas siswa -->
         <div class="mb-3">
            <label for="nama_siswa" class="form-label">Nama Siswa</label>
            <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" required>
         </div>
         <div class="mb-3">
            <label for="siswa_id" class="form-label">Siswa ID</label>
            <input type="number" class="form-control" id="siswa_id" name="siswa_id" required>
         </div>

         <!-- Kuis ID (hidden field) -->
         <input type="hidden" name="kuis_id" value="<?= $kuis_id ?>">

         <!-- Soal kuis dari database -->
         <?php if (!empty($soal)): ?>
            <?php foreach ($soal as $index => $item): ?>
               <div class="mb-4">
                  <h5><?= ($index + 1) . '. ' . $item['pertanyaan'] ?></h5>
                  <!-- Pilihan jawaban -->
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="jawaban[<?= $item['id'] ?>]" value="a" required>
                     <label class="form-check-label"><?= $item['opsi_a'] ?></label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="jawaban[<?= $item['id'] ?>]" value="b" required>
                     <label class="form-check-label"><?= $item['opsi_b'] ?></label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="jawaban[<?= $item['id'] ?>]" value="c" required>
                     <label class="form-check-label"><?= $item['opsi_c'] ?></label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="jawaban[<?= $item['id'] ?>]" value="d" required>
                     <label class="form-check-label"><?= $item['opsi_d'] ?></label>
                  </div>
               </div>
            <?php endforeach; ?>
         <?php endif; ?>

         <button type="submit" class="btn btn-primary">Kirim Jawaban</button>
      </form>
   </div>

   <!-- Footer Section -->
   <div class="footer_section layout_padding">
      <div class="social_icon">
         <ul>
            <li><a href="#"><img src="<?= base_url('images/fb-icon.png') ?>"></a></li>
            <li><a href="#"><img src="<?= base_url('images/twitter-icon.png') ?>"></a></li>
            <li><a href="#"><img src="<?= base_url('images/linkedin-icon.png') ?>"></a></li>
            <li><a href="#"><img src="<?= base_url('images/instagram-icon.png') ?>"></a></li>
         </ul>
      </div>
   </div>

   <!-- Copyright Section -->
   <div class="copyright_section">
      <div class="container">
         <p class="copyright_text">&copy; 2025 All Rights Reserved.</p>
      </div>
   </div>

   <!-- JS Files -->
   <script src="<?= base_url('js/jquery.min.js') ?>"></script>
   <script src="<?= base_url('js/popper.min.js') ?>"></script>
   <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>

</body>

</html>