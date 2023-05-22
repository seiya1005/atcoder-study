<?php
// Your code here!
$array = str_split(fgets(STDIN));

if($array[0] == $array[1] && $array[0] == $array[2]) {
    echo "Won";
    
}else{
    echo "Lost";
}

?>