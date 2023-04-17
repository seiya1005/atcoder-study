<?php
// 標準入力から値を受け取る
$input = explode(" ", trim(fgets(STDIN)));
$N = (int)$input[0];
$K = (int)$input[1];

// ハンドルネームを配列に格納する
$names = array();
for ($i = 0; $i < $K; $i++) {
    $names[] = trim(fgets(STDIN));
}

// 辞書順にソートする
sort($names);

// 上位 K 人を出力する
for ($i = 0; $i < $K; $i++) {
    echo $names[$i] . "\n";
}
?>