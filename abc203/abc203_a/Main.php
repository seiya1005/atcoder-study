<?php
fscanf(STDIN, "%d %d %d", $a, $b, $c);
if ($a == $b) echo $c;
else if ($b == $c) echo $a;
else if ($a == $c) echo $b;
else echo 0;