<?php
// Your code here!li
list($N, $S, $D) = explode(" ", trim(fgets(STDIN)));

$arr[] = 0;

for($i=0; $i<$N; $i++) {
    $arr = explode(" ", trim(fgets(STDIN)));
    if ($arr[0] < $S && $arr[1] > $D) {
        echo "Yes";
        break;
    }else{
        if($i == $N-1) {
            echo "No";
        }
    }
}
?>
