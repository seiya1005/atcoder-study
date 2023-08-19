<?php
fscanf(STDIN, "%d", $N);
$array = explode(" ", trim(fgets(STDIN)));
for ($i = 0; $i <= 2000; $i++) {
  if (in_array($i, $array) === false) {
    echo $i;
    break;
  }
}