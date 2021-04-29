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

     <div id="menu">
       <nav>

         <ul class="languages">
           <li data-value="École">École</li>
           <li data-value="Études">Études</li>
         </ul>

         <ul class="social-networks">
           <li><i class="fab fa-facebook-square"></i></li>
         </ul>

       </nav>

       <ul class="submenu">
         <li data-value="École">
           <ul>
             <li>Présentation</li>
             <li>L'école en un clic</li>
             <li>Visite virtuelle</li>
             <li>Organisation</li>
             <li>Équipe enseignante</li>
             <li>Équipe administrative</li>
           </ul>
         </li>
         <li data-value="Études">
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

     <!-- Mention Légales -->
     <a class="mention_legale" href=''>Mentions légale</a>


     <!-- Carrousel -->

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
     let count = 0;
       $('#carrousel').slick({
         autoplay: true,
         speed: 2500,
       });

       $(window).click(function(){
         // A chaque click qui n'est pas sur le menu
         $('#menu > .submenu').removeClass('is-active');
        });
        $('#menu > nav > ul > li').click(function(event){
         event.stopPropagation();
         value = $(this).attr('data-value');
            if ( !$(this).hasClass('active') ){
              $('#menu > nav > ul > li').removeClass('is-active');
              $('#menu > .submenu > li').removeClass('is-active');
            }
            $(this).toggleClass('is-active');

            $('#menu > .submenu li[data-value="' + value + '"]').toggleClass('is-active');

            $('#menu > .submenu').addClass('is-active');
            console.log($('#menu > .submenu li.is-active').length);
        });

   });

  </script>

</html>
