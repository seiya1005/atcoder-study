<?php

$N = intval(trim(fgets(STDIN)));

$products = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$canBeExpressed = false;

foreach ($products as $product) {
    if ($N % $product === 0 && $N / $product >= 1 && $N / $product <= 9) {
        $canBeExpressed = true;
        break;
    }
}

if ($canBeExpressed) {
    echo "Yes";
} else {
    echo "No";
}

?>