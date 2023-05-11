<?php
// Your code here!
$S = fgets(STDIN);
if(preg_match('/^Hello,World!$/', $S)) {
    echo "AC\n";
}else{
    echo "WA\n";

}
?>
