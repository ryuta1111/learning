<?php
class BinaryTree{
    public $data;
    public ?BinaryTree $left;
    public ?BinaryTree $right;

    public function __construct($data, $left=null, $right=null){
        $this->data = $data;
        $this->left = $left;
        $this->right = $right;
    }
}

$result = [];

function bstSearch(?BinaryTree $root, int $key):?BinaryTree{
    if($key === null) return $result[] = null;

}

function bstSearchHelper($arr, $start, $end){
    if($start === $end) return new BinaryTree($arr[$start]);

    $mid = floor(($start + $end)/2);

    $left = null;
    if($mid-1 >= $start) $left = bstSearchHelper($arr, $start, $mid-1);

    $right = null;
    if($mid+1 <= $end) $right = bstSearchHelper($arr, $mid+1, $end);

    $root = new BinaryTree($arr[$mid], $left, $right);
    return $root;
}

function toBinaryTree($nums){
    if(count($nums) === 0) return null;
    return bstSearchHelper($nums, 0, count($nums)-1);
}
