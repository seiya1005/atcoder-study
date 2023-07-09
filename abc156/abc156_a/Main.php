<?php
// Your code here!
fscanf(STDIN, '%d %d', $N, $R);

if($N > 10) {
    echo $R;
    
}else{
    $late = 100*(10-$N);
    echo $R + $late;
    
}

?>
