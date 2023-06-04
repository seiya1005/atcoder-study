<?php
// 標準入力を受け取る
$S = trim(fgets(STDIN));
$T = trim(fgets(STDIN));

$long = strlen($S);
$N = str_split($S);

$longs = strlen($T);
$X = str_split($T);
if($long<=$longs) {
    
for($i=0; $i<=$long-1; $i++) {
    
    if($N[$i] == $X[$i]) {
        if($i+1 == $long) {
            echo "Yes";
        }
    }else{
        echo "No";
        
        break;
                  
    }
}
}else{
    echo "No";
}
?>
