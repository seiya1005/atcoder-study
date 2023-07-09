<?php
// Your code here!
fscanf(STDIN, '%d %d', $N, $M);

$times = $N*$M;
$difference = $N-$M;
$sum = $N+$M;

if($times < $difference && $sum < $difference) {
    echo $difference;
    
}else if($difference < $times && $sum < $times) {
    echo $times;
    
}else{
    echo $sum;
}
?>
