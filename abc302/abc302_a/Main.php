<?php
fscanf(STDIN, '%d %d', $a, $b);
$res = intdiv($a, $b);
if($a%$b !== 0) $res += 1;
echo (string)$res;
?>