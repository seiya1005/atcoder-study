<?php
    fscanf(STDIN,"%d %d",$N,$Q);
    while($stdin = trim(fgets(STDIN))){
        $event[] = explode(" ",$stdin);
    }

    $player_list = array_fill(1,$N,0);
    for($i=0;$i<$Q;$i++){
        $query = $event[$i];
        if($query[0] == 1){
            ++$player_list[$query[1]];
        }else if($query[0] == 2){
            $player_list[$query[1]] += 2;
        }else if($query[0] == 3){
            if($player_list[$query[1]] >=2){
                echo "Yes\n";
            }else{
                echo "No\n";
            }
        }
    }
?>
