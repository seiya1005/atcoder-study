<?php
$inputs = explode(" ", trim(fgets(STDIN)));
$n = intval($inputs[0]); // 問題の数列の数
$k = intval($inputs[1]); // 消す数
$s = array_map('intval', explode(" ", trim(fgets(STDIN)))); // 数列

for ($i = 0; $i < $k; $i++) {
    // 一つ進むたびに先頭の数字を消す
    array_shift($s);

    // 数列の語尾に0を加える
    $s[] = 0;
}

// 進んだ値よりも後の数列を出力
echo implode(" ", $s);
?>



