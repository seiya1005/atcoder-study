<?php

$input = fgets(STDIN); // 標準入力から値を取得
$count = intval(trim($input)); // 取得した値を整数型に変換

while ($count > 0 - 1) {
  echo $count . PHP_EOL; // 値を出力して改行する
  $count--; // 値を1減らす
}

?>
