<?php

$a = trim(fgets(STDIN));

if ($a % 100 == 0) {
    echo "100";
} else {
    $num_to_add = 100 - ($a % 100);
    echo $num_to_add;
}

?>
