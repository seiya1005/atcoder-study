<?php
// 標準入力から値を受け取る
$inputs = trim(fgets(STDIN));
$input = trim(fgets(STDIN));

// 値を足し合わせる
$sum = 0;
foreach (explode(" ", $input) as $value) {
    $sum += $value;
}

// 結果を出力する
echo $sum . "\n";
?>
