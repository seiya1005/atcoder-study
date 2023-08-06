<?php
// Your code here!
$N = trim(fgets(STDIN));
$charge = 0;
for($i = 0; $i < 3; $i++) {
    
    if($N[$i] == "o") {
        $charge += 100;
        
    }

}
echo 700 + $charge;
?>