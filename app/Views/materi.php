<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Materi</title>
   <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
   <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
   <link rel="stylesheet" href="<?= base_url('css/responsive.css') ?>">
   <link rel="icon" href="<?= base_url('images/logotab.png') ?>" type="image/gif" />
   <link rel="stylesheet" href="<?= base_url('css/jquery.mCustomScrollbar.min.css') ?>">
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="<?= base_url('css/owl.carousel.min.css') ?>">
   <link rel="stylesheet" href="<?= base_url('css/owl.theme.default.min.css') ?>">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>
   <!-- Header -->
   <div class="header_section">
      <div class="header_main">
         <div class="mobile_menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo_mobile"><a href="<?= base_url('index') ?>"><img src="<?= base_url('images/logoedu.png') ?>"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                     <li class="nav-item"><a class="nav-link" href="<?= base_url('/') ?>">Home</a></li>
                     <li class="nav-item"><a class="nav-link active" href="<?= base_url('materi') ?>">Materi</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?= base_url('kuis') ?>">Kuis</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?= base_url('buku') ?>">Buku</a></li>
                  </ul>
               </div>
            </nav>
         </div>
         <div class="container-fluid">
            <div class="logo"><a href="<?= base_url('index') ?>"><img src="<?= base_url('images/logoedu.png') ?>"></a></div>
            <div class="menu_main">
               <ul>
                  <li><a href="<?= base_url('/') ?>">Home</a></li>
                  <li class="active"><a href="<?= base_url('materi') ?>">Materi</a></li>
                  <li><a href="<?= base_url('kuis') ?>">Kuis</a></li>
                  <li><a href="<?= base_url('buku') ?>">Buku</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>

   <!-- Services -->
   <div class="services_section layout_padding">
      <div class="container">
         <h1 class="services_taital">Pilihan Materi Pembelajaran</h1>
         <p class="services_text">Terdapat berbagai pilihan materi pembelajaran yang dapat membantu Anda dalam proses belajar.</p>
         <div class="row">
            <div class="col-md-4">
               <div class="service_box" data-toggle="modal" data-target="#materi1Modal">
                  <h3>Materi 1: Matematika</h3>
                  <p>Pelajari konsep dasar matematika.</p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="service_box" data-toggle="modal" data-target="#materi2Modal">
                  <h3>Materi 2: Bahasa Inggris</h3>
                  <p>Kembangkan kemampuan berbahasa Inggris Anda.</p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="service_box" data-toggle="modal" data-target="#materi3Modal">
                  <h3>Materi 3: Ilmu Pengetahuan Alam</h3>
                  <p>Jelajahi dunia sains.</p>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Modal Materi 1 -->
   <div class="modal fade" id="materi1Modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Materi 1: Matematika</h5>
               <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
               <h3>📘 Materi Singkat: Operasi Hitung Campuran</h3>
               <p>Operasi hitung campuran melibatkan penjumlahan, pengurangan, perkalian, dan pembagian.</p>
               <ol>
                  <li>Kerjakan dalam kurung terlebih dahulu</li>
                  <li>Perkalian dan pembagian dari kiri ke kanan</li>
                  <li>Penjumlahan dan pengurangan dari kiri ke kanan</li>
               </ol>
               <p><strong>Contoh:</strong> 12 ÷ (2 × 2) = 3</p>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
         </div>
      </div>
   </div>

   <!-- Modal Materi 2 -->
   <div class="modal fade" id="materi2Modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Materi 2: Bahasa Inggris</h5>
               <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
               <h3>📘 Penggunaan <em>is, am, are</em></h3>
               <ul>
                  <li><strong>am</strong>: I</li>
                  <li><strong>is</strong>: he, she, it</li>
                  <li><strong>are</strong>: you, we, they</li>
               </ul>
               <p><strong>Contoh soal:</strong> He ___ playing football. <br>Jawaban: <strong>is</strong></p>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
         </div>
      </div>
   </div>

   <!-- Modal Materi 3 -->
   <div class="modal fade" id="materi3Modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Materi 3: Ilmu Pengetahuan Alam</h5>
               <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
               <h3>📘 Pengelompokan Makhluk Hidup</h3>
               <p>Makhluk hidup dikelompokkan menjadi: Tumbuhan, Hewan, Jamur, Protista, Monera.</p>
               <p><strong>Contoh soal:</strong> Yang termasuk makhluk hidup? <br>Jawaban: <strong>Pohon</strong></p>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
         </div>
      </div>
   </div>

   <!-- Footer -->
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

   <!-- Copyright -->
   <div class="copyright_section">
      <div class="container">
         <p class="copyright_text">2025 All Rights Reserved.</p>
      </div>
   </div>

   <!-- JS -->
   <script src="<?= base_url('js/jquery.min.js') ?>"></script>
   <script src="<?= base_url('js/popper.min.js') ?>"></script>
   <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
   <script src="<?= base_url('js/plugin.js') ?>"></script>
   <script src="<?= base_url('js/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
   <script src="<?= base_url('js/custom.js') ?>"></script>
   <script src="<?= base_url('js/owl.carousel.js') ?>"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>