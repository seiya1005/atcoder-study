<?php
$N = trim(fgets(STDIN));

$S = trim(fgets(STDIN));

// 文字列Sに含まれるA、B、Cの数を初期化
$countA = 0;
$countB = 0;
$countC = 0;

// 文字列Sを左から順に見て、ABCが揃うまでの進捗を計算
$progress = 0;
for ($i = 0; $i < strlen($S); $i++) {
    if ($S[$i] === 'A') {
        $countA++;
    } elseif ($S[$i] === 'B') {
        $countB++;
    } elseif ($S[$i] === 'C') {
        $countC++;
    }

    // ABCが全て揃ったら進捗を出力して終了
    if ($countA > 0 && $countB > 0 && $countC > 0) {
        $progress++;
        echo $progress . PHP_EOL;
        exit();
    }

    $progress++;
}