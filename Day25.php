<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%s",$n);
for($i=0;$i<$n ;$i++){
    fscanf($_fp,"%s",$number);
    $flag =0;
    if ( $number < 2 ) {
        $flag = 1;
    }

    for ($j = 2; $j * $j <= $number; $j++) {
        if ( $number % $j == 0 ) {
            $flag = 1;
            break;
        }
    }
    
    if($flag == 0){
        echo "Prime";
        if($i != $n-1){
            echo "\n";
        }
    }else{
        echo "Not prime";
         if($i != $n-1){
            echo "\n";
        }
    }
}
?>

