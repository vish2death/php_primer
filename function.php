<?php
$title =  "FUNCTION";
include 'includes/header.php'?>
<h1>FUNCTION</h1>
<?php
// define  a fucntion

function writeMessae(){
    echo "you are doing well!!!!<br/>";

}
//calling funtiom
writeMessae();
writeMessae();
echo "<hr/>";
writeMessae();


function addFunction($num1, $num2){
    $sum = $num1 + $num2;
    echo "THe sum of $num1 and $num2= $sum <br/>";
}
function changeNum($num){
    $num = $num + 1;
    
    }

    function returnProduct($num1, $num2){
        $prod = $num1 * $num2;
       return $prod;
    }


$num = 100;
addFunction(10,20);
addFunction($num,20);
addFunction(20,20);


changeNum($num);
echo $num . '<br/>';

// return or return_value
 $return_value = returnProduct(10,20);
echo $return_value . '<br/>';

?>

<?php require 'includes/footer.php'?>
