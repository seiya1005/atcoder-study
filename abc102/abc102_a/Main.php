<?php
  $N = intval(trim(fgets(STDIN)));

if($N%2 == 0) {
  echo $N;
}else{
  echo $N*2;
}
?>