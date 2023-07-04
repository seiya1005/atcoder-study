<?php
// Your code here!
fscanf(STDIN, "%d", $N);

$quotient = floor( $N / 2);

$remainder = $N % 2;

echo $quotient+$remainder;
?>
