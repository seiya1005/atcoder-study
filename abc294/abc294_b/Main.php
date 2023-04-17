<?php
// H行Y列の行列Aを受け取る
fscanf(STDIN, "%d %d", $h, $y);
$a = array();
for ($i = 0; $i < $h; $i++) {
    $a[] = explode(" ", fgets(STDIN));
}

// 文字列S1〜SHを生成して出力
for ($i = 0; $i < $h; $i++) {
    $s = "";
    for ($j = 0; $j < $y; $j++) {
        if ($a[$i][$j] == 0) {
            $s .= ".";
        } else {
            $s .= chr($a[$i][$j] + 64);
        }
    }
    echo $s . "\n";
}
?>
