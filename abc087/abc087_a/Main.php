<?php
$A = intval(trim(fgets(STDIN)));
$B = intval(trim(fgets(STDIN)));
$C = intval(trim(fgets(STDIN)));

echo $ans = ($A - $B) % $C;