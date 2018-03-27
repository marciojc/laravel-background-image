<?php

if (!function_exists('backgroundImage')) {
  function backgroundImage($url, $size = 100) {
    $image_path = public_path($url);
    list($width, $height) = getimagesize($image_path);

    // Calculate aspect ratio: h / w * 100%.
    $ratio = $height / $width * $size;

    $view = view('background:background-image', array(
      'url' => $url,
      'ratio' => $ratio
    ));
    return $view;
  }
}
