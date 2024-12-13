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

function bstSearch(?BinaryTree $root, int $key): ?BinaryTree{
    if($root === null){
        return null;
    }

    if($root->data === $key){
        return $root;
    }

    if($key < $root->data){
        return bstSearch($root->left, $key);
    } else {
        return bstSearch($root->right, $key);
    }
}

function bstSearchHelper($arr, $start, $end){
    if($start > $end){
        return null;
    }

    $mid = floor(($start + $end) / 2);

    $left = bstSearchHelper($arr, $start, $mid-1);
    $right = bstSearchHelper($arr, $mid+1, $end);

    return new BinaryTree($arr[$mid], $left, $right);
}

function ToBinaryTree($nums){
    if(count($nums) === 0){
        return null;
    }

    $nums = array_filter($nums, fn($val)=>$val !== null);
    sort($nums);
    return bstSearchHelper($nums, 0, count($nums)-1);
}


function treeToArray(?BinaryTree $root): array{
    if($root === null){
        return [null];
    }

    $queue = [$root];
    $result = [];
    while(!empty($queue)) {
        $node = array_shift($queue);

        if($node !== null){
            $result[] = $node->data;
            $queue[] = $node->left;
            $queue[] = $node->right;
        } else {
            $result[] = null;
        }
    }

    while(end($result) === null){
        array_pop($result);
    }
    return $result;
}

$tree = toBinaryTree([0, -10, 5, null, -3, null, 9]);
$keyToFind = 5;

$resultNode = bstSearch($tree, $keyToFind);

if($resultNode !== null) {
    $subtreeArray = treeToArray($resultNode);
    print_r($subtreeArray);
}else{
    echo "Key $keyTiFind not found in the BST" .PHP_EOL;
}