<?php
  $name = $_POST['name'];
  $coursename = $_POST['coursename'];
  $coursecode = $_POST['coursecode'];
  $price = $_POST['price'];

  $caravan_price = 22;
  $powered_caravan = 38;

  echo "The value of the name variable: " . $name . "\n";
  echo "The value of the coursename variable: " . $coursename . "\n";
  echo "The value of the coursecode variable: " . $coursecode . "\n\n";

  echo $name . " is my " . $coursename . " ($coursecode) " . "tutor.\n\n";

  echo "Price excl. GST: $" . number_format($price, 2) . "\n";
  echo "Price incl. GST: ";
  calculateTax($price);


  
  function calculateTax($price) {
    $total = $price * 1.1;
    echo "$" . number_format($total, 2);
  }
?>
