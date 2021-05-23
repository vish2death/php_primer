<?php 
$title =  "STRING MANIPULTIOn";
include 'includes/header.php'?>
<body>
     <h1>STRING MANIPLTION</h1>
   <?php
   //concatenation of string
   $phrase1 = "the stodent present in class";
   $phrase2 = "the student absent in class";
   $name = "vish death";
   echo $phrase1 . ",named DELL, ". $phrase2; 
  echo '<br/>';
   echo '<hr/>';
   //string transformation
   echo 'Uppercase first letter: ' . ucfirst($name). '<br/>';
   echo 'Uppercase first letter of each word: ' . ucwords($name). '<br/>';
   echo 'Uppercase: '. strtoupper($name). '<br/>';
   echo 'lowercase: '. strtolower(" THE DEATH IS EASY WAY"). '<br/>';
  echo '<hr/>';
  echo 'REpet string: '. str_repeat( 'a',10) . '<br/>';

  echo 'REpet string: '. strtoupper(str_repeat( 'a',10)) . '<br/>';
  echo 'GET SUB string: '. substr($name, 2 , 5 ) . '<br/>';
  echo 'GET position  string: ' . strpos($name, 'e') . '<br/>';
  echo 'Find chracter "v": '. strchr($name, 'v' ) . '<br/>';
  echo 'Find chracter "d": '. strchr($name, 'd' ) . '<br/>';
  echo 'Find chracter "S": '. strchr($name, 'S' ) . '<br/>';

  echo 'Length of string: '. strlen($name) . '<br/>'; 
  echo 'WITH OUT TRIM: '. "A" . " B C D " . "E" . '<br/>';
  echo 'TRIM SPACE ON BOTH SIDE: '. "A" . trim(" B C D ") . "E" . '<br/>';
  echo 'TRIM SPACE ON left SIDE: '. "A" . ltrim(" B C D ") . "E" . '<br/>';
  echo 'TRIM SPACE ON right SIDE: '. "A" . rtrim(" B C D ") . "E" . '<br/>';
  echo 'Repace STRING with another : '. str_ireplace("in", "out", $phrase1 ) . '<br/>';


?> 
<?php require 'includes/footer.php'?>