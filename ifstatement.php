<?php 
$title =  "if statement";
include 'includes/header.php'?>
<h2> if statement</h2>
<h3 style="color: red"></h3>
    <?php
    echo '<h2>if statement</h2>';

    $grade = 80;
    if($grade >=50){
        echo '<h3 style="color: green">YOU HAVE PASSED</h3>';
      } 
      else{
          echo '<h3 style="color: red">YOU HAVE FAILED</h3>';

    }

    $grade = 'D';

    if($grade == 'A'){
        echo '<h2 style="color: orange">YOU R PASSED.....</h2>';
    }
    elseif($grade == 'B'){
        echo '<h2 style="color: blue">you good..</h2>';
    }
   
    else{
        echo '<h2 style="color: red">you are fail..</h2>';
    }
    
    
    
    ?>

<?php require 'includes/footer.php'?>