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
   <title>Kuis</title>
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
                     <li class="nav-item"><a class="nav-link" href="<?= base_url('materi') ?>">Materi</a></li>
                     <li class="nav-item"><a class="nav-link active" href="<?= base_url('kuis') ?>">Kuis</a></li>
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
                  <li><a href="<?= base_url('materi') ?>">Materi</a></li>
                  <li class="active"><a href="<?= base_url('kuis') ?>">Kuis</a></li>
                  <li><a href="<?= base_url('buku') ?>">Buku</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <!-- header section end -->

   <!-- Quiz Container Start -->
   <div class="container mb-5">
      <h2 class="text-center">Pilih Mata Pelajaran</h2>
      <div class="row">
         <!-- Subject 1 -->
         <div class="col-md-4">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Matematika</h5>
                  <!-- Matematika -->
                  <a href="<?= base_url('kuis/matematika/1') ?>" class="btn btn-primary">Kuis 1</a>
                  <a href="<?= base_url('kuis/matematika/2') ?>" class="btn btn-primary">Kuis 2</a>
                  <a href="<?= base_url('kuis/matematika/3') ?>" class="btn btn-primary">Kuis 3</a>
               </div>
            </div>
         </div>

         <!-- Subject 2 -->
         <div class="col-md-4">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Bahasa Inggris</h5>
                  <a href="<?= base_url('kuis/inggris/1') ?>" class="btn btn-primary">Kuis 1</a>
                  <a href="<?= base_url('kuis/inggris/2') ?>" class="btn btn-primary">Kuis 2</a>
                  <a href="<?= base_url('kuis/inggris/3') ?>" class="btn btn-primary">Kuis 3</a>
               </div>
            </div>
         </div>

         <!-- Subject 3 -->
         <div class="col-md-4">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Ilmu Pengetahuan Alam</h5>
                  <a href="<?= base_url('kuis/ipa/1') ?>" class="btn btn-primary">Kuis 1</a>
                  <a href="<?= base_url('kuis/ipa/2') ?>" class="btn btn-primary">Kuis 2</a>
                  <a href="<?= base_url('kuis/ipa/3') ?>" class="btn btn-primary">Kuis 3</a>
               </div>
            </div>
         </div>

         <!-- Subject 4 -->
         <div class="col-md-4">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Ilmu Pengetahuan Sosial</h5>
                  <a href="<?= base_url('kuis/ips/1') ?>" class="btn btn-primary">Kuis 1</a>
                  <a href="<?= base_url('kuis/ips/2') ?>" class="btn btn-primary">Kuis 2</a>
                  <a href="<?= base_url('kuis/ips/3') ?>" class="btn btn-primary">Kuis 3</a>
               </div>
            </div>
         </div>

         <!-- Subject 5 -->
         <div class="col-md-4">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Bahasa Indonesia</h5>
                  <a href="<?= base_url('kuis/bindo/1') ?>" class="btn btn-primary">Kuis 1</a>
                  <a href="<?= base_url('kuis/bindo/2') ?>" class="btn btn-primary">Kuis 2</a>
                  <a href="<?= base_url('kuis/bindo/3') ?>" class="btn btn-primary">Kuis 3</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Quiz Container End -->

   <!-- footer section start -->
   <div class="footer_section layout_padding" style="background-color: transparent;">
      <div class="mx-auto" style="max-width: 600px;">
         <div class="p-4 rounded shadow text-center" style="background-color:rgb(54, 49, 39);"> <!-- Warna agak gelap -->
            <div class="social_icon">
               <ul class="list-inline mb-0">
                  <li class="list-inline-item mx-2">
                     <a href="#"><img src="<?= base_url('images/fb-icon.png') ?>" alt="Facebook"></a>
                  </li>
                  <li class="list-inline-item mx-2">
                     <a href="#"><img src="<?= base_url('images/twitter-icon.png') ?>" alt="Twitter"></a>
                  </li>
                  <li class="list-inline-item mx-2">
                     <a href="#"><img src="<?= base_url('images/linkedin-icon.png') ?>" alt="LinkedIn"></a>
                  </li>
                  <li class="list-inline-item mx-2">
                     <a href="#"><img src="<?= base_url('images/instagram-icon.png') ?>" alt="Instagram"></a>
                  </li>
               </ul>
            </div>
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
   <script src="<?= base_url('js/quiz.js') ?>"></script>
</body>

</html>