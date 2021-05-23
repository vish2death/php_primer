<?php 
$title =  "For loop";
include 'includes/header.php'?>
    
<h1> For loop </h1>
<?php
for($count = 0; $count < 10; $count++){
    echo '<p style="color: red">HELLO WORLD</p>';
}

for($count = 0; $count <10; $count++){
    echo "<p>count is: $count</p>";
}





?>





<?php require 'includes/footer.php'?>