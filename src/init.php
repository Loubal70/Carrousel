<?php

$datas = [
  [
    "ImageUrl"         => "https://fidex.com.ua/monster/kanter/img/bgn7.jpg",
    "alt"              => "Belle photo non ?",
  ],
  [
    "ImageUrl"         => "https://cdn.pixabay.com/photo/2020/01/04/00/07/sea-4739448_1280.jpg",
    "alt"              => "J'aime bien cette photo",
  ]
];

// Initilisation display variable
  $html = "";

  if (!empty($datas)) {
    $html .= '<div id="carrousel">';
    foreach ($datas as $data) {
      $html .= '<div>';
        // Image
          $html .= '<img src="'. $data['ImageUrl'] .'" alt="'. $data['alt'] .'">';

      $html .= '</div>';
    }
    $html .= '</div>';

    echo $html;
  }
