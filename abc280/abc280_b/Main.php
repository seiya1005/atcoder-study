<?php
// 標準入力からNとSを取得する
$n = intval(trim(fgets(STDIN)));
$s = array_map('intval', explode(' ', trim(fgets(STDIN))));

// Aを計算する
$a = array();
$sum = 0;
for ($i = 0; $i < $n; $i++) {
  $a[$i] = $s[$i] - $sum;
  $sum += $a[$i];
}

// 結果を出力する
echo implode(' ', $a);
?>
