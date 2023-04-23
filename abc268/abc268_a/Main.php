<?php
 
// 標準入力から値を取得
$input = trim(fgets(STDIN));
 
// 入力された値を空白で区切り、配列に格納
$values = explode(" ", $input);
 
// 配列の要素数を数える
$count = count(array_unique($values));
 
// 結果を出力
echo $count;
 
?>