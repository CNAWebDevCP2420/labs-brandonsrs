<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interest Array</title>
</head>
<body>
  <?php
    $InterestRate1 = 0.725;
    $InterestRate2 = 0.750;
    $InterestRate3 = 0.775;
    $InterestRate4 = 0.800;
    $InterestRate5 = 0.825;
    $InterestRate6 = 0.850;
    $InterestRate7 = 0.875;

    // Using an array construct to modify above statements
    $ratesArray = array($InterestRate1, $InterestRate2, $InterestRate3, $InterestRate4, $InterestRate5, $InterestRate6, $InterestRate7);

    // Display array elements
    foreach ($ratesArray as $rate) {
      echo $rate;
      print("<br/>");
    }

  ?>
</body>
</html>