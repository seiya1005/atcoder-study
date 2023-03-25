<?php
// Your code here!
  [$n, $m] = explode(" ", trim(fgets(STDIN)));
  $score_array = explode(" ", trim(fgets(STDIN)));
  $question_number = explode(" ", trim(fgets(STDIN)));
  
  $target_score = array();
  foreach($question_number as $num) { array_push($target_score, $score_array[$num - 1]);};
  echo array_sum($target_score);
?>