<?php
// Your code here!
list($A, $B) = explode(" ", trim(fgets(STDIN)));
$discount = $A/100.00;
$value = $A - $B;
$result = $value/$discount;
echo number_format($result, 3);
?>
