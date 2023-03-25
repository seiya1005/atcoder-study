<?php
$nyuryoku3 = explode(" ", trim(fgets(STDIN)));
$pair1 = $nyuryoku3[0];
$pair2 = $nyuryoku3[1];
function checkPairs($pair1, $pair2) {
  $validPairs = [[1,2],[1,3],[2,4],[2,5],[3,6],[3,7],[4,8],[4,9],[5,10],[5,11],[6,12],[6,13],[7,14],[7,18]];
  
  foreach ($validPairs as $validPair) {
    if (($pair1 == $validPair[0] && $pair2 == $validPair[1]) || ($pair1 == $validPair[1] && $pair2 == $validPair[0])) {
      return "Yes";
    }
  }
  
  return "No";
}

echo checkPairs($pair1, $pair2);

?>
