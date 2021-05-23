<?php 
$title = "index";
include 'includes/header.php'?>

<!--basics of php -->
 <h1>Hello World - PHP Primer</h1>  
 <br/>
 <?php
 //printing to HTML using echo
 echo'HEllo php';
 echo'<br/>';
 echo'second line';
 echo'<br/>';
 ?>

<?php
// declare variable
$name = 'Surjith Vijayan';
$age = '29';
$real= 'Vish death';
//echo variale
echo $name;
echo $real;
echo $age;
echo '<h1>My name is: '.$name.'</h1>';
echo '<h1>Age: '.$age.'</h1>';
echo"<h1>My real name is: $real </h1>";
?>
<button type="button" class="btn btn-secondary">CLICK ME</button>
<button type="button" class="btn btn-primary">CLICK ME</button>
<button type="button" class="btn btn-success">CLICK ME</button>
<a href="https://www.heroku.com" class="btn btn-danger">Heroku.com</a>

<?php require 'includes/footer.php'?>