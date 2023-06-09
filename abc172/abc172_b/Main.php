<?php
// Your code here!
$N = trim(fgets(STDIN));
$S = str_split(trim(fgets(STDIN)));
$long = strlen($N);
$T = str_split($N);
$ans = 0;
for($i=0; $i<$long; $i++) {
    if($S[$i] == $T[$i]) {
        
    }else{
        $ans += 1;
    }
}
echo $ans;
?>