<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>FS Carrousel</title>
    <!-- CSS Slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <!-- Own CSS -->
    <link rel="stylesheet" href="src/css/main.css">

  </head>
  <body>
    <?php
      // Initialisation data
        require_once('./src/init.php');
      // Initilisation display variable
        $html;

      if (!empty($datas)) {
        foreach ($datas as $data) {
          $html .= '<div class="carrousel"><div class="">';

            // Image
              $html .= '<img src="'. $data['ImageUrl'] .'" alt="'. $data['MentionText'] .'">';
            // Mentions
              $html .= '<span>'. $data['MentionText'] .'</span>';

          $html .= '</div></div>';
        }
      }



    ?>

  </body>
  <!-- Slick JS -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script type="text/javascript">
     // Init JQuery
     const { JSDOM } = require( "jsdom" );
     const { window } = new JSDOM( "" );
     const $ = require( "jquery" )( window );

     $(document).ready(function(){
        $('.carousel').slick({
        slidesToShow: 3,
        dots:true,
        centerMode: true,
        });
      });


  </script>

</html>
