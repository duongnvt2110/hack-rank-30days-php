<?php
$_fp = fopen("input01.txt", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp, "%d\n", $n);
$arr = [];
for($i = 0;$i<$n;$i++){
    fscanf($_fp, "%[^\n]s", $arr_temp);
    if(!empty($arr_temp) ){
        $ex = explode(" ",$arr_temp);
        $arr[$ex[0]] = $ex[1]; 
    }
}

while(fscanf($_fp, "%s",$s)){
    if(isset($arr[$s])){
        echo $s.'='.$arr[$s];
        if($i != $n-1){
            echo PHP_EOL;
        }
    }else{
        echo "Not found";
        if($i != $n-1){
            echo PHP_EOL;
        }
    }
}


?>

