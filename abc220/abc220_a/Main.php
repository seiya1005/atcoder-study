<?php
// Your code here!
list($A, $B, $C) = explode(" ", trim(fgets(STDIN)));
$ans = 0;
for($i=1; $i<=10000; $i++) {
    $ans = $C*$i;
    if($ans >= $A && $ans <= $B) {
        echo $ans;
        break;
    }else if($ans >$B){
        echo -1;
        break;
    }
}