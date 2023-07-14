<?php

fscanf(STDIN, "%d %d", $A, $B);

if ($A%3 > 0 && $B-$A === 1) {
    echo 'Yes';
    
}else{
    echo 'No';
}

?>