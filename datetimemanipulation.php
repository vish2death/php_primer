<?php
$title =  "DATE TIME MANIOLTION";
include 'includes/header.php'?>
 <h1> DATE TIME MANIOLTION </h2> 

<?php
 $datenow = getdate();
 echo "TODAY'S DATE <br/>";
echo $datenow['mday'] . '<br/>';
echo $datenow['mon'] . '<br/>';
echo $datenow['year'] . '<br/>';
echo "TODAYS DATE: " .  $datenow['mday'] . '/' . $datenow['mon'] . '/' .  $datenow['year'] . '<br/>';
  
//echo time(); '<br/>';

print date("m/d/y G.i:s<pr>", time()) . '<br/>';
print "today is ";
print date("j of F y, \a\\t g.i a", time());


?>





<?php require 'includes/footer.php'?>