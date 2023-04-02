<?php
$problem = trim(fgets(STDIN)); // 標準入力から問題を読み込む
$problem_length = strlen($problem); // 問題の長さを求める

// 問題の長さが偶数でない場合はエラーを出力して終了する
if ($problem_length % 2 !== 0) {
    echo "Error: The problem length must be even.\n";
    exit;
}

// 文字列の前半と後半を入れ替える
for ($i = 0; $i < $problem_length / 2; $i++) {
    $index1 = 2 * $i;
    $index2 = $index1 + 1;
    $temp = $problem[$index1];
    $problem[$index1] = $problem[$index2];
    $problem[$index2] = $temp;
}

// 結果を出力する
echo $problem . "\n";
?>
