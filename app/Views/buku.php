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
   <title>Buku</title>
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
               <div class="logo_mobile"><a href="<?= base_url('index') ?>"><img src="images/logoedu.png"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                     <li class="nav-item"><a class="nav-link" href="<?= base_url('/') ?>">Home</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?= base_url('materi') ?>">Materi</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?= base_url('kuis') ?>">Kuis</a></li>
                     <li class="nav-item"><a class="nav-link menu-link" href="<?= base_url('buku') ?>" data-page="buku">buku</a></li>
                  </ul>
               </div>
            </nav>
         </div>
         <div class="container-fluid">
            <div class="logo"><a href="<?= base_url('index') ?>"><img src="images/logoedu.png"></a></div>
            <div class="menu_main">
               <ul>
                  <li><a href="<?= base_url('/') ?>">Home</a></li>
                  <li><a href="<?= base_url('materi') ?>">Materi</a></li>
                  <li><a href="<?= base_url('kuis') ?>">Kuis</a></li>
                  <li class="active"><a href="<?= base_url('buku') ?>">Buku</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <!-- header section end -->

   <!-- buku section start -->
   <div class="services_section layout_padding">
      <div class="container">
         <h1 class="services_taital">Buku</h1>
         <p class="services_text">Berikut merupakan beberapa bahan bacaan yang bisa digunakan dalam pembelajaran</p>
         <div class="services_section_2">
            <div class="row">
               <div class="col-md-4">
                  <div><img src="images/buku1.png" class="services_img"></div>
                  <div class="btn_main"><a href="https://static.buku.kemdikbud.go.id/content/pdf/bukuteks/kurikulum21/Informatika-BS-KLS-X.pdf" target="_blank">Informatika</a></div>
               </div>
               <div class="col-md-4">
                  <div><img src="images/buku2.png" class="services_img"></div>
                  <div class="btn_main active"><a href="https://static.buku.kemdikbud.go.id/content/pdf/bukuteks/kurikulum21/Bahasa-Inggris-BS-KLS-X.pdf" target="_blank">Bahasa Inggris</a></div>
               </div>
               <div class="col-md-4">
                  <div><img src="images/buku3.png" class="services_img"></div>
                  <div class="btn_main"><a href="https://static.buku.kemdikbud.go.id/content/pdf/bukuteks/kurikulum21/Matematika-BS-KLS-X.pdf" target="_blank">Matematika</a></div>
               </div>

            </div>
         </div>
      </div>
   </div>
   <!-- buku section end -->
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
   <!-- sidebar -->
   <script src="<?= base_url('js/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
   <script src="<?= base_url('js/custom.js') ?>"></script>
   <!-- javascript -->
   <script src="<?= base_url('js/owl.carousel.js') ?>"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>