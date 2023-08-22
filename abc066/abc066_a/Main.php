<?php
// Your code here!
$N = explode(" ", trim(fgets(STDIN)));

sort($N);

echo $N[0] + $N[1];
?>
