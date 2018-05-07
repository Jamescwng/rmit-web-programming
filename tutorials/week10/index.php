<?php
  echo "Hello world!\n";

  $capsicum = array("Green", "Yellow", "Red");

  echo "$capsicum[0] capsicums are bitter.\n";
  echo "$capsicum[2] capsicums are sweet.\n";

  print_r($capsicum);
  echo "\n";
  echo "Length of array is ";
  print_r(count($capsicum));

  $moussakas = array(
    'base' => 'potato',
    'filling' => 'beef',
    'size' => 'large'
  );

  echo "\n\n";

  foreach($moussakas as $key => $moussaka) {
    echo "$key: $moussaka\n";
  }
?>