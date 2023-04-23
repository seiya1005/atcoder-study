<?php
// 入力を受け取る
$input = trim(fgets(STDIN));
list($A, $W) = explode(" ", $input);

// 出目の合計がWになる可能性があるかどうかを判定する
$min_sum = $A;
$max_sum = $A * 6;
if ($min_sum <= $W && $W <= $max_sum) {
  echo "Yes";
} else {
  echo "No";
}
?>
