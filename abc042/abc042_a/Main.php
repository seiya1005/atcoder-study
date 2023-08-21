<?php
// Your code here!
$arr = explode(" ", trim(fgets(STDIN)));

if($arr[0] == 5 ) {
    
    if($arr[1] == 5 ) {
        
        if($arr[2] == 7 ) {
            
            echo "YES\n";
            
        }else{
            
            echo "NO\n";
            
        }
        
    }else if($arr[1] == 7) {
        
        if($arr[2] == 5 ) {
            
            echo "YES\n";
            
        }else{
            
            echo "NO\n";
            
        }
        
    }
}else if($arr[0] == 7) {
    
    if($arr[1] == 5) {
        
        if($arr[2] == 5 ) {
            
            echo "YES\n";
            
        }else{
            
            echo "NO\n";
            
        }
        
    }else{
        
        echo "NO\n";
        
    }
    
}
?>
