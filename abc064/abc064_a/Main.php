<?php
$N = trim(fgets(STDIN));

$integer = str_replace(' ', '', $N);

if($integer%4 == 0) {
    echo "YES\n";
        
}else{
    echo "NO\n";
}
?>
