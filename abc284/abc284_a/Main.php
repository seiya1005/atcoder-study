<?php

// 入力された問題数を取得する
$num_problems = intval(fgets(STDIN));

// 入力された複数行の文字列を配列に追加する
$inputs = array();
for ($i = 0; $i < $num_problems; $i++) {
    $input = trim(fgets(STDIN));
    array_push($inputs, $input);
}

// 配列の要素を逆順にする
$reversed_inputs = array_reverse($inputs);

// 逆順になった配列の要素を順番に出力する
foreach ($reversed_inputs as $input) {
    echo $input . "\n";
}

?>
