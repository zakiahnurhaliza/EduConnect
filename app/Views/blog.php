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
   <title>Blog</title>
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
   <link rel="icon" href="<?= base_url('images/fevicon.png') ?>" type="image/gif" />
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
               <div class="logo_mobile"><a href="<?= base_url('index') ?>"><img src="<?= base_url('images/logo.png') ?>"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                     <li class="nav-item"><a class="nav-link" href="<?= base_url('index') ?>">Home</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>">About</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?= base_url('services') ?>">Services</a></li>
                     <li class="nav-item"><a class="nav-link active" href="<?= base_url('blog') ?>">Blog</a></li>
                     <li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Contact</a></li>
                  </ul>
               </div>
            </nav>
         </div>
         <div class="container-fluid">
            <div class="logo"><a href="<?= base_url('index') ?>"><img src="<?= base_url('images/logo.png') ?>"></a></div>
            <div class="menu_main">
               <ul>
                  <li><a href="<?= base_url('index') ?>">Home</a></li>
                  <li><a href="<?= base_url('about') ?>">About</a></li>
                  <li><a href="<?= base_url('services') ?>">Services</a></li>
                  <li class="active"><a href="<?= base_url('blog') ?>">Blog</a></li>
                  <li><a href="<?= base_url('contact') ?>">Contact us</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <!-- header section end -->

   <!-- blog section start -->
   <div class="blog_section layout_padding margin_top_90">
      <div class="container">
         <h1 class="blog_taital">See Our Video</h1>
         <p class="blog_text">Many variations of passages of Lorem Ipsum available...</p>
         <div class="play_icon_main">
            <div class="play_icon"><a href="#"><img src="<?= base_url('images/play-icon.png') ?>"></a></div>
         </div>
      </div>
   </div>
   <!-- blog section end -->

   <!-- footer section start -->
   <div class="footer_section layout_padding">
      <div class="container">
         <div class="input_btn_main">
            <input type="text" class="mail_text" placeholder="Enter your email" name="Enter your email">
            <div class="subscribe_bt"><a href="#">Subscribe</a></div>
         </div>
         <div class="location_main">
            <div class="call_text"><img src="<?= base_url('images/call-icon.png') ?>"></div>
            <div class="call_text"><a href="#">Call +01 1234567890</a></div>
            <div class="call_text"><img src="<?= base_url('images/mail-icon.png') ?>"></div>
            <div class="call_text"><a href="#">demo@gmail.com</a></div>
         </div>
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