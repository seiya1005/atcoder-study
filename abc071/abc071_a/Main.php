<?php
// Your code here!
list($N, $A, $B) = explode(" ", trim(fgets(STDIN)));

// AB間とAC間の距離を計算
$distanceAB = abs($N - $A);
$distanceAC = abs($N - $B);

// 結果を出力
if ($distanceAB < $distanceAC) {
    echo "A\n";
} elseif ($distanceAB > $distanceAC) {
    echo "B\n";
} else {
    echo "AB間とAC間の距離が同じです\n";
}
?>