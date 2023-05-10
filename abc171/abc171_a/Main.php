<?php
// 標準入力から値を受け取る
$alpha = trim(fgets(STDIN));

// $alphaが英大文字の場合
if (ctype_upper($alpha)) {
    echo "A\n";
}
// $alphaが英小文字の場合
elseif (ctype_lower($alpha)) {
    echo "a\n";
}
?>

  