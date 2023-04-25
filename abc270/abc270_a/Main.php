<?php
$input = trim(fgets(STDIN));
list($a_score, $b_score) = explode(' ', $input);

// 各問題の配点を定義
$score_list = [1, 2, 4];

$c_score = 0;
for ($i = 0; $i < 3; $i++) {
    // A君かB君が解けた問題のみ、C君も解くことができる
    if (($a_score & $score_list[$i]) || ($b_score & $score_list[$i])) {
        $c_score += $score_list[$i];
    }
}

echo $c_score; // C君の合計点数を出力
?>