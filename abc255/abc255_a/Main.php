<?php
list($N, $C) = explode(" ", fgets(STDIN));
$arr1 = explode(" ", fgets(STDIN));
$arr2 = explode(" ", fgets(STDIN));
if($N==1&&$C==1) {
  echo $arr1[0];
  
}elseif($N==1&&$C==2){
  echo $arr1[1];
  
}elseif($N==2&&$C==1){
  echo $arr2[0];
  
}else{
  echo $arr2[1];
}
?>
