<?php
// Your code here!
list($N, $A, $B) = explode(" ", fgets(STDIN));
$arr = explode(" ", fgets(STDIN));
$max = $A+$B;
$ans = 0;
for($i=0; $i<$N; $i++) {
    $ans = $i;
    if($max == $arr[$i]){
        break;
    }
}
echo $ans+1;
?>
