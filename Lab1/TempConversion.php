<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Temp Conversion</title>
</head>
<body>
  <?php

  for ($Fahren = 0; $Fahren <=100; ++$Fahren)
  {
    $Celc = round(($Fahren - 32) * (5/9), 1);
  

  echo "
  $Fahren F = $Celc C
  ";

  echo "<br>";
  }


?>
</body>
</html>