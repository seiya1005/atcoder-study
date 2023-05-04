<?php
// Your code here!
list($A, $B, $C) = explode(" ", fgets(STDIN));
if($A*$A+$B*$B<$C*$C) {
    echo "Yes";
}else{
    echo "No";
}
?>
