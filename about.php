<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Acerca de Nosotros</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

      
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="index.php">Principal</a>
  <a href="about.php">Nosotros</a>
  <a href="gallery.php">Galería</a>
  <a href="testimonial.php">Testimonios</a>
  <a href="subscribe.php">Boletín</a>>
  <a href="contact.php">Contáctenos</a>>
</div>



<div id="main">
      <!-- header section start -->
      <div class="header_section">
         <div class="row">
            <div class="col-sm-4">
               <!--<div class="search_icon"><img src="images/search-icon.png"></div>-->
            </div>
            <div class="col-sm-4">
               <div class="logo"><img src="images/logo_hija.png"></div>
            </div>
            <div class="col-sm-4">
               <div class="togle_3">
                  <div class="left_main">
                     <div class="menu_main">
                        <a href="#"><i class="fa fa-fw fa-user"></i> Inicia Sesión</a>
                     </div>
                  </div>
                  <div class="middle_main">
                     <div class="shoping_bag"><img src="images/shopping-bag.png"></div>
                  </div>
                  <div class="right_main">
                     <div class="togle_main"><a class="class="openbtn" onclick="openNav()"><img src="images/togle-menu-icon.png" style="max-width: 100%;"></a></div>
                  </div>
               </div>
            </div>
         </div>
     </div>

   <!-- about section start -->
   <div class="about_section layout_padding">
      <div class="container">
         <div class="about_img"><img src="images/about-img1.png" style="max-width: 100%;"></div>
         <h2 class="about_text"><strong>Acerca de <span style="color: #000;">Nosotros</span></strong></h2>
         <div class="about_middle">
            <p class="about_lorem">Hija de la Narutaleza es un emprendimiento nacional con productos artesanales hechos en Costa Rica que van desde 
               cosmética natural <br>
               como jabones artesanales, exfoliantes para piel, aceites para masajes, aceites para baño así como visutería, pulseras, collares. <br>
               Somos 100% Pura Vida. Hacemos envíos a todo el país.</p>
         </div>
        <!-- <div class="red_bt">
            <button class="read_more">Read More</button>
         </div>
        --> 
      </div>
   </div>
   <!-- about section end -->


   <!-- footer section start -->
   <div class="footer_section layout_padding footer_padding">
      <div class="container">
         <div class="row">
            <div class="col-sm-4">
               <h2 class="important_text">Links Importantes</h2>
               <div class="footer_menu">
                  <ul>
                     <li><a href="index.php">Principal</a></li>
                     <li><a href="about.php">Nosotros</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-sm-4">
               <h2 class="important_text">Redes Sociales</h2>
               <div class="footer_menu">
                  <ul>
                     <li><a href="https://www.instagram.com/hija_de_la_naturaleza/">Instagram</a></li>
                  </ul>
               </div>
            </div>
            <!--
            <div class="col-sm-4">
               <h2 class="important_text">Subscribe With Us</h2>
               <p class="footer_lorem_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga</p>
               <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="text" aria-label="Recipient's username" aria-describedby=" basic-addon2">
                  <div class="input-group-append">
                     <span class="input-group-text" id="basic-addon2">Subscribe</span>
                  </div>
               </div>
            -->   
            </div>
         </div>   
      </div>
   </div>
   <!-- footer section start -->
   <!-- copyright section start -->
   <div class="copyright_text">Copyright 2022 All Right Reserved.</div>

   </div>

      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
       $('#myCarousel').carousel({
            interval: false
        });
      </script>

      <script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

</script>

   </body>
   </html>