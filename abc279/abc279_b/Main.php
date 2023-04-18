<?php
$t = trim(fgets(STDIN)); // 標準入力から文字列Tを取得
$s = trim(fgets(STDIN)); // 標準入力から文字列Sを取得

if (strpos($t, $s) !== false) { // 文字列Tに文字列Sが含まれる場合
    echo "Yes\n";
} else {
    echo "No\n";
}
?>
