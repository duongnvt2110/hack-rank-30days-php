<?php
class Node{
    public $left,$right;
    public $data;
    function __construct($data)
    {
        $this->left=$this->right=null;
        $this->data = $data;
    }
}
class Solution{
    public function insert($root,$data){
        if($root==null){
            return new Node($data);
        }
        else{            
            if($data<=$root->data){
                $cur=$this->insert($root->left,$data);
                $root->left=$cur;
            }
            else{
                $cur=$this->insert($root->right,$data);
                $root->right=$cur;
            }
            return $root;
        }
    }

	public function levelOrder($root){
        $queue = [];
        array_push($queue,$root);
        while(!empty($queue)){
            $root = array_shift($queue);
            echo $root->data." ";
            if($root->left != null){
                array_push($queue,$root->left);
            }
            if($root->right != null){
                array_push($queue,$root->right);
            }
        }
       
    }

}//End of Solution