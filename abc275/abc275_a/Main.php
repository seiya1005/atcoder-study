<?php
// 1行目から問題数を取得する
$n = intval(trim(fgets(STDIN)));

// 2行目から問題を取得して、最も大きい整数が前から何番目かを求める
$max_num = 0;
$max_index = 0;
$nums = explode(' ', trim(fgets(STDIN)));
for ($i = 0; $i < $n; $i++) {
    $num = intval($nums[$i]);
    if ($num > $max_num) {
        $max_num = $num;
        $max_index = $i + 1;
    }
}

// 最も大きい整数が前から何番目かを出力する
echo $max_index;
?>
