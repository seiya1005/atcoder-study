<?php
// 標準入力から値を取得
$N = intval(trim(fgets(STDIN)));
$S = trim(fgets(STDIN));

// N日後の天気予報が晴れかどうかを判断
if ($S[$N-1] == "o") {
  echo "Yes\n";
} else {
  echo "No\n";
}
?>
