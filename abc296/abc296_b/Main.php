<?php

// 8x8のグリッドを表す2次元配列を初期化
$grid = array_fill(0, 8, array_fill(0, 8, '.'));

// 標準入力から8行の文字列を読み込む
for ($i = 0; $i < 8; $i++) {
  $line = trim(fgets(STDIN));
  for ($j = 0; $j < 8; $j++) {
    // 文字列の各文字に対応する座標の値を変更
    if ($line[$j] === '*') {
      $grid[$i][$j] = '*';
    }
  }
}

// * がある座標を出力
for ($i = 0; $i < 8; $i++) {
  for ($j = 0; $j < 8; $j++) {
    if ($grid[$i][$j] === '*') {
      echo chr(ord('a') + $j) . (8 - $i) . PHP_EOL;
    }
  }
}
?>