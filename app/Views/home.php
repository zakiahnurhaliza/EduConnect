<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- site metas -->
   <title>EduConnect</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="<?= base_url('css/bootstrap.min.css') ?>">
   <!-- style css -->
   <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
   <!-- Responsive -->
   <link rel="stylesheet" href="<?= base_url('css/responsive.css') ?>">
   <!-- fevicon -->
   <link rel="icon" href="<?= base_url('images/logotab.png') ?>" type="image/gif" />
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
               <div class="logo_mobile"><a href="<?= base_url('/') ?>"><img src="<?= base_url('images/logoedu.png') ?>"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                     <li class="nav-item"><a class="nav-link active" href="<?= base_url('/') ?>">Home</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?= base_url('materi') ?>">Materi</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?= base_url('kuis') ?>">Kuis</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?= base_url('buku') ?>">Buku</a></li>
                  </ul>
               </div>
            </nav>
         </div>
         <div class="container-fluid">
            <div class="logo"><a href="<?= base_url('/') ?>"><img src="<?= base_url('images/logoedu.png') ?>"></a></div>
            <div class="menu_main">
               <ul>
                  <li class="active"><a href="<?= base_url('/') ?>">Home</a></li>
                  <li><a href="<?= base_url('materi') ?>">Materi</a></li>
                  <li><a href="<?= base_url('kuis') ?>">Kuis</a></li>
                  <li><a href="<?= base_url('buku') ?>">Buku</a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- header section end -->

      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <h1 class="about_taital">About Us</h1>
                     <p class="about_text">
                        🌐 Selamat Datang di Website <strong>Education Connection</strong><br><br>
                        Website ini dirancang untuk menjadi sarana pembelajaran digital yang mudah diakses, informatif, dan interaktif.<br><br>
                        Melalui platform ini, pengguna dapat:<br><br>
                        📘 Mengakses materi pembelajaran yang tersusun secara sistematis dan relevan.<br>
                        🧠 Mengerjakan kuis untuk menguji dan mengasah pemahaman terhadap materi yang telah dipelajari.<br>
                        📚 Menjelajahi tautan ke buku atau referensi tambahan sebagai pendalaman materi.<br><br>
                        Kami berharap website ini dapat menjadi sumber belajar yang bermanfaat bagi siapa saja yang ingin memperluas pengetahuan secara fleksibel dan mandiri.
                     </p>
                  </div>
               </div>
               <div class="col-mt-3">
                  <div><img src="images/about_img.png" class="about_img"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- blog section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div class="container" style="max-width: 800px; min-height: 80px; margin: auto;">
            <h1 class="client_taital">Quotes of The Day</h1>
            <div class="client_section_2">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">"Kegagalan itu guru terbaik. Yang penting kamu terus mencoba dan tidak menyerah."</p>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">"Ing Ngarsa Sung Tuladha, Ing Madya Mangun Karsa, Tut Wuri Handayani"</p>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">"Orang hebat bukan karena bakat, tapi karena mereka tidak pernah berhenti belajar."</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- client section end -->
      <!-- choose section start -->
      <div class="choose_section layout_padding">
         <div class="container">
            <h1 class="choose_taital">Why Choose Us</h1>
            <p class="choose_text">Kami menghadirkan media pembelajaran digital yang dapat diakses kapan saja dan di mana saja. Dengan desain yang sederhana namun interaktif, pengguna dapat belajar secara mandiri dan fleksibel. Materi dan kuis yang tersedia juga dapat diperbarui secara berkala sesuai perkembangan dan kebutuhan pembelajaran, sehingga selalu relevan dan up-to-date.</p>
         </div>
      </div>
      <!-- choose section end -->
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
      <!-- sidebar -->
      <script src="<?= base_url('js/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
      <script src="<?= base_url('js/custom.js') ?>"></script>
      <!-- javascript -->
      <script src="<?= base_url('js/owl.carousel.js') ?>"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>