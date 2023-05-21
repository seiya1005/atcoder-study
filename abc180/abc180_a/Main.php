<?php
//標準入力された値を受け取る
list($N, $A, $B) = explode(" ", trim(fgets(STDIN)));
//計算結果を＄ansに代入
$ans =$N-$A+$B;

echo $ans;
?>
