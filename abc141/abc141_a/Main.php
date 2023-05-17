<?php
// 標準入力で値を受け取る
$S = trim(fgets(STDIN));
// strcmpを使って文字列を比較
if ( strcmp($S, "Sunny") == 0 ) {
    
    echo "Cloudy\n";
    
} elseif ( strcmp($S, "Cloudy") == 0) {
    
    echo "Rainy\n";

    
} else {
    
    echo "Sunny\n";
    
}
?>
