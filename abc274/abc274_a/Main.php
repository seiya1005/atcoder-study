<?php
$input = trim(fgets(STDIN)); // 一行で標準入力を受け取る
[$a, $b] = explode(' ', $input); // 空白で分割して、整数Aと整数Bを取得する

$aa = intval($a);
$bb = intval($b);

if ($aa == 0) { // 分母が0の場合、エラーを表示する
    echo "Error: Division by zero";
} else {
    $result = $bb / $aa; // 計算結果を求める

    if ($result == (int)$result) { // 割り切れた場合
        printf("%.3f", round($result, 3)); // 小数点第3位まで0をつける
    } else { // 割り切れない場合
        printf("%.3f", round($result, 3)); // 小数点第3位で四捨五入する
    }
}
?>