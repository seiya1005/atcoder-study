<?php
// Your code here!
$N = trim(fgets(STDIN));
$marble = 0;

for($i = 0; $i < 3; $i++) {
    
    if($N[$i] == 1) {
        $marble++;
    }
}
echo $marble;
?>
