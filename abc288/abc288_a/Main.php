<?php
 
$inputs = [];
while ($input = trim((string) fgets(STDIN))) {
    $inputs[] = explode(' ', $input);
}
 
$num = $inputs[0][0];

$ans = 0;
 
for($i = 1;$i<=$num;$i++){
   $ans = (int)$inputs[$i][0] + (int)$inputs[$i][1];

  echo $ans.PHP_EOL;
}
?>