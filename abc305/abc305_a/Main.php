<?php
// Your code here!
    $input = (int)fgets(STDIN);
    
    if ($input%5 === 1){
        echo $input-1;
    }elseif ($input%5 === 2) {
        echo $input-2;
    }elseif($input%5 === 3){
        echo $input+2;
    }elseif($input%5 === 4){
        echo $input+1;
    }elseif($input%5 === 0){
        echo $input;
    }
?>
 