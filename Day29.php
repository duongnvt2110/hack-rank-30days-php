<?php



$stdin = fopen("input.txt", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%[^\n]", $nk_temp);
    $nk = explode(' ', $nk_temp);

    $n = intval($nk[0]);

    $k = intval($nk[1]);
    
    $max = 0;
    $n = 112;
    for($i=1;$i<$n;$i++){
        for($j=$i+1;$j<=$n;$j++){
            $result = $i & $j;
            echo $result."\n";
            if($result < $k){
                if($max < $result){
                    $max = $result;
                }
            }
        }
    }
    exit;
    print_r($max."\n");
}

