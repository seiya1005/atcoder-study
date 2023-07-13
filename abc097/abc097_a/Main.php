<?php
// Your code here!
fscanf(STDIN, '%d %d %d %d', $a, $b, $c, $d);

if(str_replace("-", "", $ans1 = $a-$c) <= $d) {
    echo "Yes";
    
}else{
    
if(str_replace("-", "", $ans = $c-$b) <= $d && str_replace("-", "", $ans2 = $a-$b) <= $d) {
    echo "Yes";
    
}else{
    echo "No";
}

}

?>
