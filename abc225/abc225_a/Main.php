<?php
$arr = str_split(trim(fgets(STDIN)));

if($arr[0] == $arr[1] && $arr[0] == $arr[2]) {
    echo 1;
    
}else if($arr[0] == $arr[1] || $arr[0] == $arr[2] || $arr[1] == $arr[2]) {
    echo 3;
    
}else{
    echo 6;
    
}
?>
