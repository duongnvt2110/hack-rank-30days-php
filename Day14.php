<?php
    class Difference{
    private $elements=array();
    public $maximumDifference;

    // Write your code here
    function __construct($a){
        $this->a = $a;
    }
    function ComputeDifference(){
        $max = 0;
        for($i=0;$i<count($this->a);$i++){
            for($j=$i+1;$j<count($this->a);$j++){
                $sum = abs($this->a[$i]-$this->a[$j]);
                if($sum > $max){
                    $max = $sum;
                }
            }
        }
        $this->maximumDifference = $max;
    }
} //End of Difference class  
     

$N=intval(fgets(STDIN));
$a =array_map('intval', explode(' ', fgets(STDIN)));
$d=new Difference($a);
$d->ComputeDifference();
print ($d->maximumDifference);
?>