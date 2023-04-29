<?php

list($M, $H) = array_map('intval', explode(' ', fgets(STDIN)));
if($H%$M === 0){
    echo "Yes";
}else{
    echo "No";
}

?>