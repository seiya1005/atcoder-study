<?php

// 標準入力から値を取得
$input = explode(" ", fgets(STDIN));
$s = intval($input[0]);
$t = intval($input[1]);
$x = intval($input[2]);

// 時刻の範囲を調整
if ($s > $t) {
    $t += 24;
}

// 電気の状態を判定
if (($x >= $s && $x < $t) || ($x+24 >= $s && $x+24 < $t)) {
    echo "Yes";
} else {
    echo "No";
}

?>
