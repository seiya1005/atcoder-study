<?php
// 標準入力から整数列Sを取得する
$S = trim(fgets(STDIN));

// 数列Sの各要素を1つずつ見て、0なら1に、1なら0に置き換える
for ($i = 0; $i < strlen($S); $i++) {
    if ($S[$i] === '0') {
        echo '1';
    } else {
        echo '0';
    }
}
?>
