<?php
// Your code here!
$N = trim(fgets(STDIN));
$long = strlen($N);
if($long == 6) {
    echo $N;
}else{
    $arr = str_split($N);
    for($i=0; $i<6; $i++) {
        array_push($arr, $arr[$i]);
        $array_count = count($arr);
        if($array_count == 6) {
            break;
        }
    }
    echo implode($arr);
}
?>
