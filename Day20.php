<?php

$handle = fopen ("php://stdin", "r");
fscanf($handle, "%d",$n);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
$a = array_map('intval', $a);
// Write Your Code Here

function swap(&$a,&$b){
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$numberOfSwaps = 0;

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n - 1; $j++) {
        // Swap adjacent elements if they are in decreasing order
        if ($a[$j] > $a[$j + 1]) {
            swap($a[$j], $a[$j + 1]);
            $numberOfSwaps++;
        }
    }  
    // If no elements were swapped during a traversal, array is sorted
    if ($numberOfSwaps == 0) {
        break;
    }
}

echo "Array is sorted in ".$numberOfSwaps." swaps. \n";
echo "First Element: ".$a[0]."\n";
echo "Last Element: ".$a[count($a)-1]."\n";

?>