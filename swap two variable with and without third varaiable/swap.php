<?php
/* You can swap the values of two variables 
in PHP both with and without using a third variable. Here are examples of both methods:*/
/* Using a third variable: */
$var1 = 10;
$var2 =20;

$swap = $var1;  //10
$var1 = $var2;  // var1=20
$var2 = $swap;  // var2=10

echo "After swapping: var1 = $var1";
echo "</br>";
echo "After swapping: var2 = $var2";
echo "</br>";

/* This code creates a temporary variable $temp to store the value of $var1, then assigns the value of $var2 to $var1, 
and finally assigns the value of $temp (which contains the original value of $var1) to $var2. */
?>

<?php
// Without using a third variable (using arithmetic operations):

$temp1 = 10;
$temp2 = 20;

$temp1 = $temp1 + $temp2; // new value store of $temp1= 30
$temp2 = $temp1 - $temp2;  // new value store of $temp2= 30-20=10
$temp1 = $temp1 -$temp2; // new value store of $temp1 = 30-10=20

echo "After Swapping: temp1 = $temp1";
echo "</br>";
echo "After Swapping: temp2 = $temp2";
?>