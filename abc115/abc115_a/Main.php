<?php
// Your code here!
/* D=25 なら Christmas, 
D=24 なら Christmas Eve, 
D=23 なら Christmas Eve Eve, 
D=22 なら Christmas Eve Eve Eve と出力するプログラムを作ってください。
*/
$N = intval(trim(fgets(STDIN)));

$arr_num = [25 => "Christmas", 24 => "Christmas Eve", 23 => "Christmas Eve Eve", 22 => "Christmas Eve Eve Eve" ];

echo $arr_num[$N];
?>
