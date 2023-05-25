<?php
// Your code here!
list($A, $B, $C) = explode(" ", trim(fgets(STDIN)));
if($A<$B) {
    if($C<$B) {
        echo $A+$C;
    }else{
        echo $A+$B;
    }
}elseif($A<$C) {
    echo $A+$B;
}else{
    echo $C+$B;
}
?>
