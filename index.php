<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>FS Carrousel</title>

    <!-- CSS Slick -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <!-- Import Icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">

    <!-- Own CSS -->
    <link rel="stylesheet" href="src/css/normalize.css">
    <link rel="stylesheet" href="src/css/main.css">

  </head>
  <body>

    <!-- Menu -->

     <nav>
       <span>Menu</span>
       <ul class="languages">
         <li onclick="this.classList.toggle('is-active')">EN</li>
         <li onclick="this.classList.toggle('is-active')">FR</li>
       </ul>

       <ul class="social-networks">
         <li><i class="fab fa-facebook-square"></i></li>
         <li><i class="fab fa-twitter-square"></i></li>
         <li><i class="fab fa-pinterest-square"></i></li>
       </ul>

     </nav>

     <div id="menu">
       <ul>
         <li>
           <h1>École</h1>
           <ul>
             <li>Présentation</li>
             <li>L'école en un clic</li>
             <li>Visite virtuelle</li>
             <li>Organisation</li>
             <li>Équipe enseignante</li>
             <li>Équipe administrative</li>
           </ul>
         </li>
         <li>
           <h1>Études</h1>
           <ul>
             <li>Admission</li>
             <li>Inscription/Réinscription</li>
             <li>Formations</li>
             <li>International</li>
             <li>Chaires</li>
           </ul>
         </li>
       </ul>
     </div>


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
       speed: 2500,
     });
     $('.languages li').on('click', () => {
       $('#menu ul').toggleClass('is-active');
     });
   });

  </script>

</html>
