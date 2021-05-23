<?php
$title =  "switch Statement";
include 'includes/header.php'?>
    <h1>switch Statement</h1>
<?php
$grade = 'A';
switch($grade){
case 'A':
echo '<h2 style="color: green">YOU HAVE PASSED</h2>';
break;
case 'B':
echo '<h2 style="color: blue">YOU HAVE good!</h2>';
break;
default:
echo '<h2 style="color: red">YOU HAVE FAILED</h2>';
break;




}




?>

<?php require 'includes/footer.php'?>