<?php

list($A, $B) = explode(" ", trim(fgets(STDIN)));

if($A+1 == $B || $A-1 == $B) {
    echo "Yes\n";
}elseif(11-$A == $B || 11-$A == $B) {
    echo "Yes\n";
}else{
    echo "No";
}
