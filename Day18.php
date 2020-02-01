<?php

class Solution {
    public $queue= [];
    public $stack= [];
    // Write your code here
    function pushCharacter($s){
        $index = count($this->stack);
        while($index > 0){
            $this->stack[$index] = $this->stack[$index-1];
            $index--;
        }
        $this->stack[$index] = $s;
    }

    function popCharacter(){
        $popStack = $this->stack[0];    
        unset($this->stack[0]);
        $index = count($this->stack);
        $i=0;
        $stackTemp = [];
        while($index > 0){
            $stackTemp[$i] = $this->stack[$i+1];
            $index--;
            $i++;
        }
        $this->stack = $stackTemp;
        return $popStack;
    }

    function enqueueCharacter($s){
        $index = count($this->queue);
        $this->queue[$index] = $s;
    }

    function dequeueCharacter(){
        $popQueue = $this->queue[0];
        unset($this->queue[0]);
        $index = count($this->queue);
        $i=0;
        $queueTemp = [];
        while($index > 0){
            $queueTemp[$i] = $this->queue[$i+1];
            $index--;
            $i++;
        }
        $this->queue = $queueTemp;
        return $popQueue;
    }

}

// read the string s
$s = fgets(STDIN);

// create the Solution class object p
$obj = new Solution();

$len = strlen($s);
$isPalindrome = true;

// push/enqueue all the characters of string s to stack
for ($i = 0; $i < $len; $i++) {
    $obj->pushCharacter($s{$i});
    $obj->enqueueCharacter($s{$i});
}

/*
pop the top character from stack
dequeue the first character from queue
compare both the characters
*/
for ($i = 0; $i < $len / 2; $i++) {
    if($obj->popCharacter() != $obj->dequeueCharacter()){
        $isPalindrome = false;
    	
        break;
    }
}

//finally print whether string s is palindrome or not.
if ($isPalindrome)
    echo "The word, ".$s.", is a palindrome.";
else
    echo "The word, ".$s.", is not a palindrome.";
?>