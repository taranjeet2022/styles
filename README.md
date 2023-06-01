PHP-Element-Class
=================

The PHP Styles Class allows you to print styles.

How to install?
=====

```shell
composer require krypton/styles
```

How to use?
=====

A simple example ...

```php
<?php

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

$styles = new Styles($css);
echo $styles->render();
```    

License
=======

This class is provided under GPL license http://www.gnu.org/licenses/gpl.html
