<?php
list($a, $b, $c) = explode(' ', trim(fgets(STDIN)));
echo (($a <= $b && $b <= $c) || ($c <= $b && $b <= $a)) ? 'Yes' : 'No';
?>
