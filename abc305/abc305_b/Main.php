<?php
$arr_distance = ['A'=>3, 'B'=>1, 'C'=>4, 'D'=>1, 'E'=>5, 'F'=>9, 'G'=>0];
$ans_value = explode(" ", trim(fgets(STDIN)));
sort($ans_value);
$output = array();

// 開始キーから終了キーまでの要素を取得
$flag = false;
foreach ($arr_distance as $key => $value) {
    if ($key === $ans_value[0]) {
        $flag = true;
    }
    if ($flag) {
        $output[$key] = $value;
    }
    if ($key === $ans_value[1]) {
        break;
    }
}
$lastValue = end($output);
$sum = array_sum($output);
echo $sum-$lastValue;
?>