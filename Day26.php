<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%[^\n]",$a);
$a = explode(" ",$a);
fscanf($_fp,"%[^\n]",$e);
$e = explode(" ",$e);

if($a[2] < $e[2]){
    echo 0;
}else{
    if($a[2] == $e[2]){
        if($a[1] <= $e[1]){
            if($a[0] <= $e[0]){
                echo 0;
            }else{
                echo 15*($a[0]-$e[0]);
            }
        }else{
            echo 500*($a[1]-$e[1]);
        }
    }else{
        echo "10000";
    }  
}
?>

