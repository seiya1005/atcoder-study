<?php
$input = trim(fgets(STDIN)); // 標準入力から値を取得して、先頭と末尾の空白を削除
$hex = strtoupper(str_pad(dechex($input), 2, "0", STR_PAD_LEFT)); // 入力値を16進数に変換し、英大文字に変換し、2桁になるように先頭に0を詰める
echo $hex; 
?>
