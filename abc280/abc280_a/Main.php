<?php
$count = 0; // # の出現回数を初期化する

while ($input = fgets(STDIN)) { // 複数行の入力を取得する
  $count += substr_count($input, '#'); // # の出現回数を加算する
}

echo $count; // 結果を出力する
?>
