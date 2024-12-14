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
    }else{
        return bstSearch($root->right, $key);
    }
}

function toBinaryTree(array $nums): ?BinaryTree{
    if(count($nums) === 0){
        return null;
    }

    $n = count($nums);
    $nodes = array_map(fn($val)=>$val === null ? null : new BinaryTree($val), $nums);

    for($i=0; $i<$n; $i++){
        if($nodes[$i] !== null){
            $leftIndex = 2 * $i + 1;
            $rightIndex = 2 * $i + 2;

            $nodes[$i]->left = $leftIndex < $n ? $nodes[$leftIndex] : null;
            $nodes[$i]->right = $rightIndex < $n ? $nodes[$rightIndex] : null;
        }
    }
    return $nodes[0];
}

function treeToArray(?BinaryTree $root): array{
    if($root === null){
        return [null];
    }

    $queue = [$root];
    $result = [];

    while(!empty($queue)){
        $node = array_shift($queue);

        if($node !== null){
            $result[] = $node->data;
            $queue[] = $node->left;
            $queue[] = $node->right;
        }else{
            $result[] = null;
        }
    }

    while(end($result) === null){
        array_pop($result);
    }

    return $result;
}

$resultNode = bstSearch(toBinaryTree([0, -10, 5, null, -3, null, 9]), 5);
print_r(treeToArray($resultNode));

$resultNode = bstSearch(toBinaryTree([0, -10, 5, null, -3, null, 9]), 20);
print_r(treeToArray($resultNode));

$resultNode = bstSearch(toBinaryTree([5,3,6,2,4,null,7]), 3);
print_r(treeToArray($resultNode));

$resultNode = bstSearch(toBinaryTree([5,3,6,2,4,null,7]), 5);
print_r(treeToArray($resultNode));

$resultNode = bstSearch(toBinaryTree([5,3,6,2,4,null,7]), 15);
print_r(treeToArray($resultNode));


?>


<?php
class BinaryTree2{
    public $data;
    public ?BinaryTree2 $left;
    public ?BinaryTree2 $right;

    public function __construct($data, $left=null, $right=null){
        $this->data = $data;
        $this->left = $left;
        $this->right = $right;
    }
}

function exists(?BinaryTree2 $root, int $key): bool{

}