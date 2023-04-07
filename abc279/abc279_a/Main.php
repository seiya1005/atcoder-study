<?php
$input = trim(fgets(STDIN)); // 標準入力から値を取得し、トリムする
$output = str_replace('v', '1', $input); // 'V' を '1' に置換する
$output = str_replace('w', '2', $output); // 'W' を '2' に置換する
$sum = array_sum(str_split($output)); // 文字列を分割し、全ての数字の和を計算する
echo $sum; // 結果を出力する
?>
