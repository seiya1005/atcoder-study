<?php
$inputs = explode(" ", trim(fgets(STDIN)));
$a = (int)$inputs[0];
$b = (int)$inputs[1];
$c = (int)$inputs[2];

if ($a == $b && $b != $c) {
  echo "Yes";
} else if ($a == $c && $a != $b) {
  echo "Yes";
} else if ($b == $c && $b != $a) {
  echo "Yes";
} else {
  echo "No";
}
?>
