<?php
// Your code here!
$match = intval(trim(fgets(STDIN)));
$result = trim(fgets(STDIN));
$A = substr_count($result, "A");
$T = substr_count($result, "T");
$j = 0;
$l = 0;
if($A == $T) {
    for($i=0; $i<$match; $i++) {
        if($result[$i] == "A") {
            $j++;
            if($A == $j) {
                echo "A";
                break;
            }
        }else{
            $l++;
            if($T == $l) {
                echo "T";
                break;
            }
        }
    }
}elseif($A<$T) {
    echo "T";
    
}else{
    echo "A";
}
?>
