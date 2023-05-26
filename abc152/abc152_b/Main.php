<?php
// Your code here!
list($A, $B) = explode(" ", trim(fgets(STDIN)));
if($A<$B) {
    for($i=1; $i<=$B; $i++) {
        echo $A;
    }
}else{
    for($i=1; $i<=$A; $i++) {
        echo $B;
    }
}
?>
