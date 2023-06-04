<?php

fscanf(STDIN, "%d", $n);

$arr = explode(" ",trim(fgets(STDIN)));

$arrCount = array_count_values($arr);
  
$ans = array_search(3, $arrCount);

echo $ans;