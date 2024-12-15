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

echo "問題1" .PHP_EOL;
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

function toBinaryTreeHelper2($arr, $start, $end){
    if($start > $end) return null;

    $mid = floor(($start + $end) / 2);
    $left = toBinaryTreeHelper2($arr, $start, $mid-1);
    $right = toBinaryTreeHelper2($arr, $mid+1, $end);

    return new BinaryTree2($arr[$mid], $left, $right);
}

function toBinaryTree2($nums){
    $nums = array_filter($nums, fn($val)=>$val !== null);
    sort($nums);
    return toBinaryTreeHelper2($nums, 0, count($nums)-1);
}

function exists(?BinaryTree2 $root, int $key): bool{
    if($root == null) return false;
    if($root->data == $key) return true;

    if($root->data > $key){
        return exists($root->left, $key);
    }else{
        return exists($root->right, $key);
    }
}

echo "問題2" .PHP_EOL;
echo(exists(toBinaryTree2([0,-10,5,null,-3,null,9]),5) ? "True" : "False") .PHP_EOL;
echo(exists(toBinaryTree2([0,-10,5,null,-3,null,18]),20) ? "True" : "False") .PHP_EOL;
echo(exists(toBinaryTree2([5,3,6,2,4,null,7]),3) ? "True" : "False") .PHP_EOL;
echo(exists(toBinaryTree2([5,3,6,2,4,null,7]),5) ? "True" : "False") .PHP_EOL;
echo(exists(toBinaryTree2([5,3,6,2,4,null,7]),15) ? "True" : "False") .PHP_EOL;

?>

<?php
class BinaryTree3{
    public $data;
    public ?BinaryTree3 $left;
    public ?BinaryTree3 $right;

    public function __construct($data, $left=null, $right=null){
        $this->data = $data;
        $this->left = $left;
        $this->right = $right;
    }
}

function toBinaryTreeHelper3($arr, $start, $end){
    if($start > $end) return null;

    $mid = floor(($start + $end) / 2);
    $left = toBinaryTreeHelper3($arr, $start, $mid-1);
    $right = toBinaryTreeHelper3($arr, $mid+1, $end);

    return new BinaryTree3($arr[$mid], $left, $right);
}

function toBinaryTree3($nums){
    $nums = array_filter($nums, fn($val)=>$val !== null);
    sort($nums);
    return toBinaryTreeHelper3($nums, 0, count($nums)-1);
}

function minimumNode(?BinaryTree3 $root):?BinaryTree3{
    if($root === null) return null;

    while($root->left !== null){
        $root = $root->left;
    }
    return $root;
}

function treeToArray2(?BinaryTree3 $root): array{
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

echo "問題3" .PHP_EOL;
$resultNode = minimumNode(toBinaryTree3([0, -10, 5, null, -3, null, 9]));
print_r(treeToArray2($resultNode)) .PHP_EOL;

$resultNode = minimumNode(toBinaryTree3([5,3,6,2,4,null,7]));
print_r(treeToArray2($resultNode)) .PHP_EOL;

$resultNode = minimumNode(toBinaryTree3([-2,-17,8,-18,-11,3,19,null,null,null,-4,null,null,null,25]));
print_r(treeToArray2($resultNode)) .PHP_EOL;

$resultNode = minimumNode(toBinaryTree3([3,-3,13,-7,1,6,18,-10,-4,0,2,5,8,15,19]));
print_r(treeToArray2($resultNode)) .PHP_EOL;

$resultNode = minimumNode(toBinaryTree3([1,-5,15,-9,-4,10,17,null,-6,null,0,null,14,16,19]));
print_r(treeToArray2($resultNode)) .PHP_EOL;
