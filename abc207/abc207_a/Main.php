<?php
// Your code here!
list($A, $B, $C) = explode(" ", fgets(STDIN));
if($A < $B ) {
    if($B < $C) {
        echo $B+$C;
    }elseif($A < $C) {
        echo $B+$C;
    }else{
        echo $B+$A;
    }
}elseif($A < $C) {
    echo $A+$C;
}elseif($C < $B) {
    echo $A+$B;
}else{
    echo $A+$C;
}
?>
