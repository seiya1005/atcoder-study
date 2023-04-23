<?php
list($v, $a, $b, $c) = explode(' ', trim(fgets(STDIN)));

while (true) {
    if ($v < $a) {
        echo "F";
        break;
    }
    $v -= $a;

    if ($v < $b) {
        echo "M";
        break;
    }
    $v -= $b;

    if ($v < $c) {
        echo "T";
        break;
    }
    $v -= $c;
}
?>
