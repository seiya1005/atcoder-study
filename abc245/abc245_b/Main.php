<?php
// Nを取得
$N = intval(trim(fgets(STDIN)));

// Aを取得
$A = array_map('intval', explode(' ', trim(fgets(STDIN))));

// 数列Aに含まれない最小の非負整数を求める
$min = 0;
while (in_array($min, $A)) {
  $min++;
}

// 結果を出力
echo $min;
?>
