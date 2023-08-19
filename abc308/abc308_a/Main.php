<?php
// A - New Scheme
// https://atcoder.jp/contests/abc308/tasks/abc308_a
// AC

  $input_arr = explode(' ', trim(fgets(STDIN)));
 
  $sort = $input_arr;
  sort($input_arr);
  if ($sort != $input_arr) {
      echo 'No';
      return;
  }
  foreach ($input_arr as $number) {
      if ($number < 100 || $number > 675 || $number % 25 != 0) {
        echo 'No';
        return;
      }
  }
  echo 'Yes';
