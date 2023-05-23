<?php
// Your code here!
list($A, $B, $C) = explode(" ", trim(fgets(STDIN)));
$time = $A/$C;
if($time<=$B) {
    echo "Yes";
}else{
    echo "No";
}
?>
