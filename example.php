<?php

declare(strict_types=1);

require_once('vendor/autoload.php');

use Krypton\Styles\Styles;

$css = [
    [
      'names' => [
        '.red'
      ],
      'attrs' => [
        'color' => '#F00'
      ]
    ],
    [
      'names' => [
        '.blue'
      ],
      'attrs' => [
        'color' => '#F0F'
      ]
    ],
    [
      'names' => [
        '.grey'
      ],
      'attrs' => [
        'color' => '#999'
      ]
    ],
    [
      'names' => [
        '.green'
      ],
      'attrs' => [
        'color' => '#0F0'
      ]
    ]
];

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Styles Demo</title>
    <style>
      <?php
        $styles = new Styles($css);
        echo $styles->render();
      ?>
    </style>
  </head>
  <body>
    <p class="red">This is paragraph in red</p>
    <p class="blue">This is paragraph in not actually blue</p>
    <p class="grey">This is paragraph in grey</p>
    <p class="green">This is paragraph in green</p>
  </body>
</html>