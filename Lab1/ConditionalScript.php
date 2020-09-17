<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conditional Script</title>
</head>
<body>
  <?php

  $IntVariable = 75;

  if($IntVariable > 100) {
    $Result ="$IntVariable is greater than 100";
  }

  else {
    $Result = "$IntVariable is less than or equal to 100";
  }

  echo "<p>$Result</p>";


?>
</body>
</html>