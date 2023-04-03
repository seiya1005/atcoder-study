<?php

// 一行目の入力を取得
$line1 = fgets(STDIN);
list($n, $p, $q, $r, $s) = explode(' ', trim($line1));

// 二行目の入力を取得
$line2 = fgets(STDIN);
$a = explode(' ', trim($line2));

// 数列AのP番目からQ番目の数列とR番目からS番目の数列を入れ替える
for ($i = $p - 1, $j = $r - 1; $i < $q && $j < $s; $i++, $j++) {
    $tmp = $a[$i];
    $a[$i] = $a[$j];
    $a[$j] = $tmp;
}

// 数列Aを出力
echo implode(' ', $a);

?>
