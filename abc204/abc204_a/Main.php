<?php

// 入力値を受け取る
$input = trim(fgets(STDIN));
list($x, $y) = explode(" ", $input);

// ジャンケンの手を定義する
$hands = array(0, 1, 2);

// あいこになった場合の手を求める
if ($x == $y) {
  echo $hands[$x];
} else {
  $z = ($x + 1) % 3;
  if ($z == $y) {
    echo $hands[($y + 1) % 3];
  } else {
    echo $hands[$z];
  }
}

?>
