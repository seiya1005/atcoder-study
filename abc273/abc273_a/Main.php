<?php

function f($n) {
  if ($n == 0) {
    return 1;
  } else {
    return $n * f($n - 1);
  }
}

// 標準入力から整数を読み取り、f(n) を計算して出力する
$n = intval(trim(fgets(STDIN)));
echo f($n);

?>
