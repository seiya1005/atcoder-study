<?php

// 標準入力から値を読み込む
$num_of_questions = intval(trim(fgets(STDIN)));
$questions = explode(" ", trim(fgets(STDIN)));

// 偶数を抽出する
$even_numbers = array_filter($questions, function($n) {
  return intval($n) % 2 == 0;
});

// 順番を維持し、偶数を出力する
foreach ($questions as $q) {
  if (in_array($q, $even_numbers)) {
    echo $q . "\n";
  }
}
?>