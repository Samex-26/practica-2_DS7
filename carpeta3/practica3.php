<?php
  $xml = simplexml_load_file("prac3.xml");

  foreach($xml->color as $color ){
    echo "El color " . $color->nombre . " tiene el código hexadecimal " . $color->codigo_hexadecimal;
  }
 ?> 