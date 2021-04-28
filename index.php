<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>FS Carrousel</title>

    <!-- CSS Slick -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <!-- Make Hamburger -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/0.8.1/hamburgers.min.css">

    <!-- Import Icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">

    <!-- Own CSS -->
    <link rel="stylesheet" href="src/css/normalize.css">
    <link rel="stylesheet" href="src/css/main.css">

  </head>
  <body>

    <!-- Hamburger Menu -->

    <button id="simpleHamburger" class="hamburger hamburger--spring" onclick="this.classList.toggle('is-active')" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>

    <!-- Menu -->

     <nav>
       <span>Menu</span>
       <ul class="languages">
         <li>EN</li>
         <li>FR</li>
       </ul>

       <ul class="social-networks">
         <li><i class="fab fa-facebook-square"></i></li>
         <li><i class="fab fa-twitter-square"></i></li>
         <li><i class="fab fa-pinterest-square"></i></li>
       </ul>

     </nav>


    <?php
      // Initialisation data
      require_once('./src/init.php');
    ?>


  </body>

  <!-- Init JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Slick JS -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


  <script type="text/javascript">

   $(document).ready(() => {
     $('#carrousel').slick({
       autoplay: false,
       speed: 800,
     });
   });

  </script>

</html>
