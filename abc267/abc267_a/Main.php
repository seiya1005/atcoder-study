<?php
// 曜日を取得する
$day = trim(fgets(STDIN));

// 土曜日までの残り日数を計算する
switch($day) {
  case 'Monday':
    $days_remaining = 5;
    break;
  case 'Tuesday':
    $days_remaining = 4;
    break;
  case 'Wednesday':
    $days_remaining = 3;
    break;
  case 'Thursday':
    $days_remaining = 2;
    break;
  case 'Friday':
    $days_remaining = 1;
    break;
  default:
    $days_remaining = 0;
    break;
}

// 結果を出力する
echo $days_remaining;
?>
