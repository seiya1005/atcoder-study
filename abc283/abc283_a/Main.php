<?php
// Your code here!
$num = trim(fgets(STDIN));

//空白を区切りに配列に分割して代入
$array = explode(" ",$num);

//配列の1つ目を変数に代入
$first = $array[0];

//配列の2つ目を変数に代入
$second = $array[1];

$jou = pow($first, $second);

echo $jou;
?>