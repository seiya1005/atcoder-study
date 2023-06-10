<?php
// Your code here!
$N = intval(trim(fgets(STDIN)));
$T = trim(fgets(STDIN));
$S = trim(fgets(STDIN));

$replacement1 = array('o', 'l');
$replacement2 = array('0', '1');

$ans1 = str_replace($replacement1, $replacement2, $T);
$ans2 = str_replace($replacement1, $replacement2, $S);

if ($ans1 == $ans2){
  echo "Yes\n";
}else{
  echo "No\n";
}
?>
