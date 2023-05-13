<?php

// 標準入力からAとBを読み込む
[$a, $b] = fscanf(STDIN, "%d %d");

// A以上B以下の整数の個数を数える
$count = 0;
for ($i = $a; $i <= $b; $i++) {
    $count++;
}

// 結果を出力する
echo $count . PHP_EOL;

?>
