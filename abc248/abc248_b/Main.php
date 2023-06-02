<?php
  list($a,$b,$k) = explode(" ",fgets(STDIN));
  $counter = 0;
  while($a < $b){
    $a *= $k;
    $counter++;
  }

	echo $counter;
?>