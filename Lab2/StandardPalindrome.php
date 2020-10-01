<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$word = "onamonapia"; // variable
$wordRem = preg_replace("/[^a-zA-Z]/", "", $word);// removes spaces
$reverse = strrev($word); // reverses the word
$vowels = array('a','e','i','o','u');// array of vowels
if ($wordRem == $reverse){ 
echo "Word/phrase: " . $word . "<br>";
echo "Perfect palindrome" . "<br>";
}
else{
echo "Word/phrase: " . $word . "<br>";
echo "Not a palindrome" . "<br>";
}
$Vowel = "";
$Consonant = "";
$len = strlen($wordRem);
for($i=0; $i<$len; $i++){
if(in_array($wordRem[$i], $vowels))
{
$Vowel .= $wordRem[$i];
}
   else{
       $Consonant .= $wordRem[$i];
   }
}
echo "Contains consonants:" . "<br>";
foreach (count_chars($Consonant, 1) as $i => $val) {
echo chr($i) . "-" . $val . "<br>";
}
echo "Contains vowels:" . "<br>";
foreach (count_chars($Vowel, 1) as $i => $val) {
echo chr($i) . "-" . $val . "<br>";
}
?>
</body>
</html>