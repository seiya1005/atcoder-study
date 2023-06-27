<?php
$temperature = intval(trim(fgets(STDIN)));
if($temperature >= 30) {
    echo "Yes\n";
}else{
    echo "No\n";
}
?>
