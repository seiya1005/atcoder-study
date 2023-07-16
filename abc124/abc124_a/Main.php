<?php
fscanf(STDIN, "%d%d", $A, $B);
echo (max($A,$B) + max( (max($A,$B)-1) , min($A,$B)  )) ."\n";
?>
