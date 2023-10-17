<?php
// 0 1 1 2 3 5 8 13 21 34
/* You can generate and display the Fibonacci series in PHP using a loop.
 The Fibonacci series is a sequence of numbers where each number is the sum of the two preceding ones.
 Here's a PHP code snippet to generate and display the Fibonacci series up to a specified number of terms: */
if(isset($_POST['submit'])){
$limit = $_POST['number'];
$n1 = 0;
$n2 = 1;

$x=0;

for($i=0; $i<$limit; $i++){
echo "$n1";
$n1 = $n1 + $n2;
$n2 = $x;
$x = $n1;
echo "</br>";

}
}
?>
<form method="POST">
    <input type="text" name="number" required />
    <input type="submit" name="submit" />
</form>