<?php
// Your code here!
$S = fgets(STDIN);
list($a, $b) = explode(" ", fgets(STDIN));
$tmp = $S[$a - 1];
$S[$a - 1] = $S[$b - 1];
$S[$b - 1] = $tmp;

// 入れ替えた結果を出力する
echo $S . "\n";
?>