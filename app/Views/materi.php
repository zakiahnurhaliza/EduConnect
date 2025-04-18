<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Materi</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
   <!-- style css -->
   <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
   <!-- Responsive-->
   <link rel="stylesheet" href="<?= base_url('css/responsive.css') ?>">
   <!-- fevicon -->
   <link rel="icon" href="<?= base_url('images/logotab.png') ?>" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="<?= base_url('css/jquery.mCustomScrollbar.min.css') ?>">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="<?= base_url('css/owl.carousel.min.css') ?>">
   <link rel="stylesheet" href="<?= base_url('css/owl.theme.default.min.css') ?>">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>
   <!-- header section start -->
   <div class="header_section">
      <div class="header_main">
         <div class="mobile_menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo_mobile"><a href="<?= base_url('index') ?>"><img src="<?= base_url('images/logoedu.png') ?>"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
   <!-- header section end -->

   <!-- services section start -->
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
   <!-- services section end -->

   <!-- Modal for Materi 1 -->
   <div class="modal fade" id="materi1Modal" tabindex="-1" role="dialog" aria-labelledby="materi1ModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="materi1ModalLabel">Materi 1: Matematika</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <p>Pelajari konsep dasar matematika, termasuk aljabar, geometri, dan statistik. Berikut adalah beberapa contoh dan latihan yang dapat Anda coba:</p>
               <ul>
                  <li>Contoh 1: Menyelesaikan persamaan linear.</li>
                  <li>Contoh 2: Menghitung luas dan keliling bangun datar.</li>
                  <li>Latihan: Selesaikan soal-soal berikut untuk menguji pemahaman Anda.</li>
               </ul>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
         </div>
      </div>
   </div>

   <!-- Modal for Materi 2 -->
   <div class="modal fade" id="materi2Modal" tabindex="-1" role="dialog" aria-labelledby="materi2ModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="materi2ModalLabel">Materi 2: Bahasa Inggris</h5>
               <button type="button" class
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <p>Kembangkan kemampuan berbahasa Inggris Anda melalui latihan berbicara, mendengarkan, dan menulis. Berikut adalah beberapa contoh dan latihan yang dapat Anda coba:</p>
               <ul>
                  <li>Contoh 1: Membuat kalimat sederhana.</li>
                  <li>Contoh 2: Mendengarkan dialog dan menjawab pertanyaan.</li>
                  <li>Latihan: Cobalah untuk berbicara dengan teman dalam bahasa Inggris.</li>
               </ul>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
         </div>
      </div>
   </div>

   <!-- Modal for Materi 3 -->
   <div class="modal fade" id="materi3Modal" tabindex="-1" role="dialog" aria-labelledby="materi3ModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="materi3ModalLabel">Materi 3: Ilmu Pengetahuan Alam</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <p>Jelajahi dunia sains dengan mempelajari biologi, fisika, dan kimia. Berikut adalah beberapa contoh dan latihan yang dapat Anda coba:</p>
               <ul>
                  <li>Contoh 1: Memahami siklus hidup tanaman.</li>
                  <li>Contoh 2: Mengamati hukum Newton dalam gerakan.</li>
                  <li>Latihan: Lakukan eksperimen sederhana di rumah dan catat hasilnya.</li>
               </ul>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
         </div>
      </div>
   </div>

   <!-- footer section start -->
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
   </div>
   <!-- footer section end -->

   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="container">
         <p class="copyright_text">2025 All Rights Reserved.</p>
      </div>
   </div>
   <!-- copyright section end -->

   <!-- Javascript files-->
   <script src="<?= base_url('js/jquery.min.js') ?>"></script>
   <script src="<?= base_url('js/popper.min.js') ?>"></script>
   <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
   <script src="<?= base_url('js/jquery-3.0.0.min.js') ?>"></script>
   <script src="<?= base_url('js/plugin.js') ?>"></script>
   <script src="<?= base_url('js/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
   <script src="<?= base_url('js/custom.js') ?>"></script>
   <script src="<?= base_url('js/owl.carousel.js') ?>"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>