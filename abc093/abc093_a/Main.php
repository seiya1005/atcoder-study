<?php
// Your code here!
$arr1 = ["a", "b", "c"];
$arr2 = str_split(fgets(STDIN));

if (empty(array_diff($arr1, $arr2))) {
    echo "Yes";
}else{
    echo "No";
}

?>