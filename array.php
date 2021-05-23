<?php 
$title =  "Array";
include 'includes/header.php' ?>

<h1><?php echo $title ?></h1> 
<?php
// a variale
$num = 3;
// an array
// only one datatype
$number = array(1,2,3,4,5,6,7,8,9,34,43,34,2,23,323,2,4,4,22,2,32,32);
echo $number[5];

echo "<p>$number[9]</p>";

$size = count($number);
echo "<P>ARRAY NUMBER IS SIzE: $size</p>";

for($count = 0; $count < $size; $count++){
    echo "<p>$number[$count]</p>";
}
?> 
<?php require 'includes/footer.php'?>