<?php
// 標準入力から文字列を受け取る
$strings = [];
for ($i = 1; $i <= 3; $i++) {
    $strings[] = trim(fgets(STDIN));
}

// 与えられた文字列のリスト
$allStrings = ["ABC", "ARC", "AGC", "AHC"];

// 与えられた文字列を取り除く
foreach ($strings as $string) {
    $index = array_search($string, $allStrings);
    if ($index !== false) {
        unset($allStrings[$index]);
    }
}

// 残りの文字列を出力する
foreach ($allStrings as $remainingString) {
    echo $remainingString . "\n";
}
?>
