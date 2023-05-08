<?php
$input = trim(fgets(STDIN)); // 標準入力から値を取得し、余分な空白や改行を取り除く

$rounded = round($input, 0); // X を小数第一位で四捨五入する

echo intval($rounded); // 四捨五入した結果の整数部分を出力する
?>