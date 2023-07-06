<?php
// Your code here!
fscanf(STDIN, '%d %d', $N, $M);

$even = $N*($N-1)/2;

if($M > 1) {
    $odd = $M*($M-1)/2;
}else{
    $odd = 0;
}
echo $even+$odd;
?>
