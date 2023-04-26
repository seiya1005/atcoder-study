<?php
$S = trim(fgets(STDIN)); // 標準入力からSを取得し、先頭と末尾の余分な空白を除去する

if (substr($S, -2) === "er") { // Sの末尾2文字が"er"である場合
  echo "er"; // "er"を出力
} elseif (substr($S, -3) === "ist") { // Sの末尾3文字が"ist"である場合
  echo "ist"; // "ist"を出力
}
?>
