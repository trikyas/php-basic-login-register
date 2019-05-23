<?php
    function array_delete($value, $array) {
      $key = array_search($value, $array);
      If($key !== false) {
        unset($array[$key]);
        }
      return array_values($array);
      }
      $bg_colors = array(
        '#06AED5',
        '#F0C808',
        '#FFF1D0',
        '#AAFF19',
        '#DD1C1A',
        'orange',
        'brown',
        'coral',
        'tomato',
        'lime',
        'rgb(70,45,103)',
        'rgb(35,15,64)',
        'rgb(214,105,66)',
        'rgb(66,39,49)'
      );
      $bg_color_count = count($bg_colors);
      $bg_images = array(
        'url("./images/AdobeColorScreenGrab.jpg")',
        'url("./images/DesignBackground.jpg")',
        'url("./images/MonsterNut.png")',
        'url("./images/RobotShadow.jpg")',
        'url("./images/TypographyBackground.jpg")',
        'url("./images/TypographyBackground2.jpg")'
      );
      $bg_images_count = count($bg_images);
?>
