<?php
// Your code here!
fscanf(STDIN, '%d %d %d', $N, $A, $B);

$value = explode(" ", trim(fgets(STDIN)));

if(min($value)+$B < $A) {
    echo min($value)+$B;
    
}else{
    echo $A;
}


?>
