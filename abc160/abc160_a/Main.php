<?php
// Your code here!
$arr = str_split(trim(fgets(STDIN)));

if($arr[2] == $arr[3] && $arr[4] == $arr[5]) {
    echo "Yes\n";
}else{
    echo "No\n";
}
?>