<?php

// $stdin = fopen("php://stdin", "r");

$n = 524275;

$arr = [];

while($n != 0){
    if($n%2 == 0){
        $arr[] = 0;
        $n = floor($n/2);
    }else{
        $arr[] = 1;
        $n = floor($n/2);
    }
}
$sum = 0;
$max = 0;
for($i=0;$i<count($arr);$i++){
    if(isset($arr[$i+1])){
        if($arr[$i] == 1){
            if($arr[$i+1] ==1){
                $sum = $sum+1;
            }else{
                $sum = 1;
            }         
        }
        if($max < $sum){
            $max = $sum;
        }
    }
}
echo $max;

