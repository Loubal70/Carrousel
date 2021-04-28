<?php

$datas = [
  [
    "ImageUrl"         => "https://fidex.com.ua/monster/kanter/img/bgn7.jpg",
    "MentionUrl"  => "https://mminetwork.fr",
    "MentionText" => "Découvrez un nouvel horizon",
  ],
  [
    "ImageUrl"         => "https://wallpaperaccess.com/full/1657858.jpg",
    "MentionUrl"  => "https://github.com/Loubal70/Carrousel",
    "MentionText" => "Découvrez un beau profil",
  ]
];

// Initilisation display variable
  $html = "";

if (!empty($datas)) {
  $html .= '<div id="carrousel">';
  foreach ($datas as $data) {
    $html .= '<div>';
      // Image
        $html .= '<img src="'. $data['ImageUrl'] .'" alt="'. $data['MentionText'] .'">';
      // Mentions
        $html .= '<span>'. $data['MentionText'] .'</span>';

    $html .= '</div>';
  }
  $html .= '</div>';
  echo $html;
}
