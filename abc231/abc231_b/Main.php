<?php
// Your code here!
$N=intval(fgets(STDIN));
$array = [];
for($i = 1; $i <= $N; $i+=1) {
    
array_push($array, fgets(STDIN));
   
}

$counts = array_count_values($array);

$maxCount = max($counts);
$mostFrequentElements = array_keys($counts, $maxCount);

foreach ($mostFrequentElements as $element) {
    echo $element;
}
?>