<?php
$S = trim(fgets(STDIN));

// Kが2つのRの間にあるかどうかを判定
if (strpos($S, 'K') !== false && strpos($S, 'R') !== false) {
    $idx_r1 = strpos($S, 'R');
    $idx_r2 = strpos($S, 'R', $idx_r1+1);
    $idx_k = strpos($S, 'K');
    if ($idx_r1 < $idx_k && $idx_k < $idx_r2) {
        // 条件を満たす
    } else {
        echo "No\n";
        exit();
    }
}

// Bがある位置の偶奇が異なるかどうかを判定
$b_indices = array_keys(str_split($S, 1), 'B');
if (count($b_indices) == 2 && $b_indices[0] % 2 != $b_indices[1] % 2) {
    // 条件を満たす
} else {
    echo "No\n";
    exit();
}

// 条件をすべて満たす場合は"YES"を出力
echo "Yes\n";
?>
