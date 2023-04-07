<?php
$input = trim(fgets(STDIN)); // 標準入力から値を読み込む
$pos = strrpos($input, 'a'); // 最後に現れる 'a' の位置を取得する
if ($pos === false) { // もし 'a' が含まれていなければ
    echo '-1' . PHP_EOL; // -1 を出力する
} else { // 'a' が含まれていれば
    echo ($pos + 1) . PHP_EOL; // 位置を出力する
}
?>
