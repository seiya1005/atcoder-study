<?php
  fscanf(STDIN, "%d %d", $H, $W);
  for($i=0; $i < $H; $i++) {
    fscanf(STDIN, "%s", $S);
    for($j=0; $j < $W; $j++) {
        if ($S[$j] == 'o') {
            $x[] = $i;
            $y[] = $j;
        }
    }
  }
  echo abs($x[1]-$x[0])+abs($y[1]-$y[0]);