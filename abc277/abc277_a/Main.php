<?php
// 標準入力から値を受け取る
list($n, $x) = explode(" ", trim(fgets(STDIN)));

$p = explode(" ", trim(fgets(STDIN)));


// $xが含まれる位置を求める
$position = array_search($x, $p);

// 結果を出力する
echo $position+1;
?>
