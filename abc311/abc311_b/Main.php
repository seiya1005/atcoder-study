<?php
// 標準入力から値を取得
$input = trim(file_get_contents('php://stdin'));
$lines = explode("\n", $input);

// NとDの値を取得
list($N, $D) = explode(' ', $lines[0]);

// N人の予定を配列に格納
$schedules = array_slice($lines, 1);

// 連続して被った日数をカウントする変数
$count = 0;
// 連続して被った日数の最大値を保存する変数
$maxCount = 0;

// 各日にちごとに予定をチェック
for ($day = 0; $day < $D; $day++) {
    // すべての人の予定を調べる
    $allX = true;
    foreach ($schedules as $schedule) {
        if ($schedule[$day] === 'x') {
            $allX = false;
            break;
        }
    }

    // すべての人が予定がない日だった場合
    if ($allX) {
        $count++;
        // 最大値を更新
        $maxCount = max($maxCount, $count);
    } else {
        $count = 0; // 連続していない場合はカウントをリセット
    }
}

echo $maxCount;
?>
