<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

  // Create a variable for the value "36.882"
  $ValueEntered = "36.882";

  // Check to see if above value is interger
  $IntegerValue = (is_numeric($ValueEntered) ?
  $ValueEntered : (int)$ValueEntered);

  $TestingValue = (is_int($IntegerValue) ?
  $IntegerValue : round($IntegerValue));

  // get the remainder
  $Remainder = $TestingValue % 2;

  // Check if remainder is odd or even
  $ResultValue = ($Remainder==0 ? "even" : "odd");

  // Declare function
  $Display = (is_numeric($ValueEntered) ?
  "$ValueEntered" : "$ValueEntered");

  $EnteredDescription = ($ValueEntered===$TestingValue ?
  "$TestingValue" : "$TestingValue (the round off value is $Display)");

  echo "
  $EnteredDescription is $ResultValue
  ";


?>
</body>
</html>