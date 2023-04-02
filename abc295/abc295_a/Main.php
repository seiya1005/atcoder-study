<?php

// 標準入力から値を読み込む
$num_of_questions = trim(fgets(STDIN));
$questions = explode(" ", trim(fgets(STDIN)));
// 指定された単語を含むかどうかを確認する
// 指定された単語を含むかどうかを確認する
$target_words = array('and', 'not', 'that', 'the', 'you');
foreach ($target_words as $word) {
  if (in_array($word, $questions)) {
    echo "Yes\n";
    exit();
  }
}

// 指定された単語を含まない場合はNoを出力する
echo "No\n";
?>
