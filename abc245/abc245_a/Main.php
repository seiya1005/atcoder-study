<?php
// Your code here!
list($A, $B, $C, $D) = explode(" ", fgets(STDIN));
if($A == $C) {
    if($B < $D + 0.1){
        echo "Takahashi";
    }else{
        echo "Aoki";    
    }
}else{
    if($A < $C) {
       echo "Takahashi";
    }else{
        echo "Aoki";
    }
}
?>
