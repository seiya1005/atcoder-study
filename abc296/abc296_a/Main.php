<?php
// 1行目の入力値を取得
$n = trim(fgets(STDIN));
// 2行目の入力値を取得
$str = trim(fgets(STDIN));

// FとMが交互に並んでいるかをチェックする
$is_alternate = true;
if (strpos($str, 'FF') !== false || strpos($str, 'MM') !== false) {
  $is_alternate = false;
} else {
  for ($i = 0; $i < $n - 1; $i++) {
    if ($str[$i] === $str[$i + 1]) {
      $is_alternate = false;
      break;
    }
  }
}

// 結果を出力する
if ($is_alternate) {
  echo "Yes\n";
} else {
  echo "No\n";
}
?>
