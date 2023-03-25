<?php
    $S = readline(); // 文字列Sを入力する
    for ($i = 0; $i < strlen($S); $i++) {
        if (ctype_upper($S[$i])) { // Sのi番目の文字が大文字かどうかを判定
            fwrite(STDOUT, ($i + 1) . "\n"); // i+1を出力する（先頭文字を1文字目とするため）
            break; // 大文字が見つかったらループを抜ける
        }
    }
?>
