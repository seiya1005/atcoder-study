<?php
// 標準出力で値を受け取る
$S = str_split(fgets(STDIN));
// 配列の中身をそれぞれ入れ替えて結合し出力
echo $S[1].$S[2].$S[0];
?>