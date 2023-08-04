<?php
// Your code here!
list($A, $B, $C) = explode(" ", trim(fgets(STDIN)));

if($A*$B > $C) {
    echo $C;
    
}else{
    echo $A*$B;
    
}
?>
