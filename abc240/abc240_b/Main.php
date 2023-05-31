<?php

// 標準入力から整数Nを取得
$N = intval(trim(fgets(STDIN)));

// 標準入力から数列Aを取得
$A = array_map('intval', explode(' ', trim(fgets(STDIN))));

// 数列Aに異なる整数がいくつあるかを調べる
$uniqueIntegers = array_unique($A);
$count = count($uniqueIntegers);

// 結果を出力
echo $count;

?>
