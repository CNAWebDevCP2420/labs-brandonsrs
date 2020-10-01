<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Strength</title>
</head>
<body>
  <?php

  function password_validation($password)
  {
    $var1='/[A-Z]/';
    $var2='/[a-z]/';
    $var3='/[^a-zA-Z\d\s]/';
    $var4='/[0-9]/';
    $var5='/[\s]/';

    if(preg_match_all($var1,$password,$out)<1)
      return "Please provide at least one upper case letter.";

      if(preg_match_all($var2,$password,$out)<1)
      return "Please provide at least one lower case letter.";

      if(preg_match_all($var3,$password,$out)<1)
      return "Please provide at least one special character.";

      if(preg_match_all($var4,$password,$out)<1)
      return "Please provide at least one numeric value.";

      if(preg_match_all($var5,$password,$out)>=1)
      return "Spaces are prohibited.";

      if(strlen($password) <=8 || strlen($password) >=16)
        return "Password length must be between 8 and 16 characters.";

        return "OK";
  }

  $passwords = array("sRzjK$892","@@eeew","cna^stu881","TorontoRaptor95","122d@stjoh",
  "covid19%999","isThisaStrongpassword1", "fjiwor", "203HI", "psychrockrocks");

  for($i=0; $i<count($passwords); $i++)
  {
    $secure = password_validation($passwords[$i]);

    echo $passwords[$i];
    echo "\t : \t";

    if($secure == "OK")
    {
      echo "Stronger";
    }
    else{
      echo $secure;
    }
    echo "<br><br>";
  }
  ?>
</body>
</html>