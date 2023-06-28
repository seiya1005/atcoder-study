<?php
//標準入力で経過日数を受け取る
$carr = intval(trim(fgets(STDIN)));
//2で割り切れた日は白そうでない日は黒を出力
    if($carr%2 == 0) {
        echo "White";
    }else{
        echo "Black";
    }

?>
