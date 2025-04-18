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
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="banner_taital">Semangat Belajar!</h1>
                     <p class="banner_text">"Kegagalan itu guru terbaik. Yang penting kamu terus mencoba dan tidak menyerah."</p>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="banner_taital">Belajar Itu Keren</h1>
                     <p class="banner_text">"Belajar bukan beban, tapi jalan menuju impian."</p>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="banner_taital">Fokus dan Konsisten</h1>
                     <p class="banner_text">"Orang hebat bukan karena bakat, tapi karena mereka tidak pernah berhenti belajar."</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
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
            <div class="col-md-6 padding_right_0">
               <div><img src="images/about-img.png" class="about_img"></div>
            </div>
         </div>
      </div>
   </div>
   <!-- blog section end -->
   <!-- client section start -->
   <div class="client_section layout_padding">
      <div class="container">
         <h1 class="client_taital">Testimonial</h1>
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
                           <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="box_right">
                           <div class="client_taital_left">
                              <div class="client_img"><img src="images/client-img.png"></div>
                              <div class="quick_icon"><img src="images/quick-icon.png"></div>
                           </div>
                           <div class="client_taital_right">
                              <h4 class="client_name">Dame</h4>
                              <p class="customer_text">Customer</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_main">
                        <div class="box_left">
                           <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="box_right">
                           <div class="client_taital_left">
                              <div class="client_img"><img src="images/client-img.png"></div>
                              <div class="quick_icon"><img src="images/quick-icon.png"></div>
                           </div>
                           <div class="client_taital_right">
                              <h4 class="client_name">Dame</h4>
                              <p class="customer_text">Customer</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_main">
                        <div class="box_left">
                           <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="box_right">
                           <div class="client_taital_left">
                              <div class="client_img"><img src="images/client-img.png"></div>
                              <div class="quick_icon"><img src="images/quick-icon.png"></div>
                           </div>
                           <div class="client_taital_right">
                              <h4 class="client_name">Dame</h4>
                              <p class="customer_text">Customer</p>
                           </div>
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