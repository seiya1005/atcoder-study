<?php
// 標準入力からhとwを取得する
list($h, $w) = explode(' ', trim(fgets(STDIN)));

// グリッドを取得する
$grid = array();
for ($i = 0; $i < $h; $i++) {
  $grid[] = str_split(trim(fgets(STDIN)));
}

// 各列に置かれている箱の数を数える
$boxes = array_fill(0, $w, 0);
for ($j = 0; $j < $w; $j++) {
  for ($i = 0; $i < $h; $i++) {
    if ($grid[$i][$j] == '#') {
      $boxes[$j]++;
    }
  }
}

// 結果を出力する
echo implode(' ', $boxes);
?>
