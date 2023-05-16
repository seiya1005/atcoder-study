<?php
// Your code here!
list($A, $B, $C) = explode(" ", fgets(STDIN));
$S = $A+$B+$C;
if($S>=22) {
    echo "bust";
}else{
    echo "win";
}
?>
