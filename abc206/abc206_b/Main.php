<?php
// Your code here!
$N = intval(trim(fgets(STDIN)));
$dey = 0;
$ans = 0;
for ($i = 1; $i <= 100000000; $i++) {
    $dey += $i;
    if($dey < $N) {
        $ans++;
    }else{
        continue;
    }
}    
    echo $ans + 1;
?>
