<?php

// 標準入力から値を取得
$input = trim(fgets(STDIN));
list($n, $x) = explode(' ', $input);

// A〜Zまでの文字列を生成
$alphabet = range('A', 'Z');

// 文字列を作成
$result = '';
foreach ($alphabet as $letter) {
    $result .= str_repeat($letter, $n);
}

// 先頭からX番目の文字を出力
$answer = $result[$x - 1];
echo $answer;

?>
