<?php
$n = intval(fgets(STDIN)); // 指定された値を入力

// A~Zまでの大文字を順番に取得し、指定された位置までの文字を出力
if ($n >= 1 && $n <= 26) {
    for ($i = 1; $i <= $n; $i++) {
        echo chr(64 + $i); // chr関数で文字コードを文字に変換する
    }
} else {
    echo "Error: 指定された値は1から26の間である必要があります。";
}
?>
