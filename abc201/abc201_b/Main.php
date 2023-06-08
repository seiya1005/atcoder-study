<?php
// 標準入力からNの値を取得
$N = intval(trim(fgets(STDIN)));

// 高さを格納する配列
$heights = array();

// N個の山の名前と高さを取得
for ($i = 0; $i < $N; $i++) {
    // 標準入力から山の名前と高さを取得
    $input = explode(" ", trim(fgets(STDIN)));
    $name = $input[0];
    $height = intval($input[1]);

    // 高さを配列に追加
    $heights[$name] = $height;
}

// 高さの降順でソート
arsort($heights);

// 二番目に高い山の名前を取得
$keys = array_keys($heights);
$second_tallest = $keys[1];

// 結果を出力
echo $second_tallest;
?>
