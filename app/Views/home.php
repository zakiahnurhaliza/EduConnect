<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- site metas -->
   <title>A World</title>
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
   <link rel="icon" href="<?= base_url('images/fevicon.png') ?>" type="image/gif" />
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
               <div class="logo_mobile"><a href="<?= base_url('/') ?>"><img src="<?= base_url('images/logo.png') ?>"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                     <li class="nav-item"><a class="nav-link active" href="<?= base_url('/') ?>">Home</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>">About</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?= base_url('services') ?>">Services</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?= base_url('blog') ?>">Blog</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Contact</a></li>
                  </ul>
               </div>
            </nav>
         </div>
         <div class="container-fluid">
            <div class="logo"><a href="<?= base_url('/') ?>"><img src="<?= base_url('images/logo.png') ?>"></a></div>
            <div class="menu_main">
               <ul>
                  <li class="active"><a href="<?= base_url('/') ?>">Home</a></li>
                  <li><a href="<?= base_url('about') ?>">About</a></li>
                  <li><a href="<?= base_url('services') ?>">Services</a></li>
                  <li><a href="<?= base_url('blog') ?>">Blog</a></li>
                  <li><a href="<?= base_url('contact') ?>">Contact us</a></li>
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
                     <h1 class="banner_taital">Adventure</h1>
                     <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
                     <div class="read_bt"><a href="#">Get A Quote</a></div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="banner_taital">Adventure</h1>
                     <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
                     <div class="read_bt"><a href="#">Get A Quote</a></div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="banner_taital">Adventure</h1>
                     <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
                     <div class="read_bt"><a href="#">Get A Quote</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
   </div>
   <!-- header section end -->
   <!-- services section start -->
   <div class="services_section layout_padding">
      <div class="container">
         <h1 class="services_taital">Services</h1>
         <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
         <div class="services_section_2">
            <div class="row">
               <div class="col-md-4">
                  <div><img src="images/img-1.png" class="services_img"></div>
                  <div class="btn_main"><a href="#">Rafting</a></div>
               </div>
               <div class="col-md-4">
                  <div><img src="images/img-2.png" class="services_img"></div>
                  <div class="btn_main active"><a href="#">Hiking</a></div>
               </div>
               <div class="col-md-4">
                  <div><img src="images/img-3.png" class="services_img"></div>
                  <div class="btn_main"><a href="#">Camping</a></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- services section end -->
   <!-- about section start -->
   <div class="about_section layout_padding">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6">
               <div class="about_taital_main">
                  <h1 class="about_taital">About Us</h1>
                  <p class="about_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                  <div class="readmore_bt"><a href="<?= base_url('about') ?>">Read More</a></div>
               </div>
            </div>
            <div class="col-md-6 padding_right_0">
               <div><img src="images/about-img.png" class="about_img"></div>
            </div>
         </div>
      </div>
   </div>
   <!-- about section end -->
   <!-- blog section start -->
   <div class="blog_section layout_padding">
      <div class="container">
         <h1 class="blog_taital">See Our Video</h1>
         <p class="blog_text">Many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
         <div class="play_icon_main">
            <div class="play_icon"><a href="#"><img src="images/play-icon.png"></a></div>
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
         <p class="choose_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
         <div class="read_bt_1"><a href="#">Read More</a></div>
         <div class="newsletter_box">
            <h1 class="let_text">Let Start Talk with Us</h1>
            <div class="getquote_bt"><a href="#">Get A Quote</a></div>
         </div>
      </div>
   </div>
   <!-- choose section end -->
   <!-- footer section start -->
   <div class="footer_section layout_padding">
      <div class="container">
         <div class="input_btn_main">
            <input type="text" class="mail_text" placeholder="Enter your email" name="Enter your email">
            <div class="subscribe_bt"><a href="#">Subscribe</a></div>
         </div>
         <div class="location_main">
            <div class="call_text"><img src="images/call-icon.png"></div>
            <div class="call_text"><a href="#">Call +01 1234567890</a></div>
            <div class="call_text"><img src="images/mail-icon.png"></div>
            <div class="call_text"><a href="#">demo@gmail.com</a></div>
         </div>
         <div class="social_icon">
            <ul>
               <li><a href="#"><img src="images/fb-icon.png"></a></li>
               <li><a href="#"><img src="images/twitter-icon.png"></a></li>
               <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
               <li><a href="#"><img src="images/instagram-icon.png"></a></li>
            </ul>
         </div>
      </div>
   </div>
   <!-- footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="container">
         <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html Templates</a></p>
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