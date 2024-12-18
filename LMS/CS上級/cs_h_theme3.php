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
class BinaryTree3 {
    public $data;
    public ?BinaryTree3 $left;
    public ?BinaryTree3 $right;

    public function __construct($data, $left = null, $right = null) {
        $this->data = $data;
        $this->left = $left;
        $this->right = $right;
    }
}

//木構造を再帰的に構築するヘルパー関数
function toBinaryTreeHelper3(array $arr, int $index): ?BinaryTree3{
    if($index >= count($arr) || $arr[$index] === null){
        return null;
    }

    $leftIndex = 2 * $index + 1;
    $rightIndex = 2 * $index + 2;

    return new BinaryTree3(
        $arr[$index],
        toBinaryTreeHelper3($arr, $leftIndex),
        toBinaryTreeHelper3($arr, $rightIndex)
    );
}

//配列から木を構築するメイン関数
function toBinaryTree3(array $nums): ?BinaryTree3{
    return toBinaryTreeHelper3($nums, 0);
}

//最小値を持つノードを取得する関数
function minimumNode(?BinaryTree3 $root): ?BinaryTree3{
    if($root === null) return null;

    while($root->left !== null){
        $root = $root->left;
    }

    return $root;
}

//木構造を配列に変換する関数
function treeToArray3(?BinaryTree3 $root): array{
    if($root === null) return [null];

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

// テストケース

echo "Test Case 1:\n";
$tree1 = toBinaryTree3([0, -10, 5, null, -3, null, 9]);
$minNode1 = minimumNode($tree1);
print_r(treeToArray3($minNode1));

echo "Test Case 2:\n";
$tree2 = toBinaryTree3([5, 3, 6, 2, 4, null, 7]);
$minNode2 = minimumNode($tree2);
print_r(treeToArray3($minNode2));

echo "Test Case 3:\n";
$tree3 = toBinaryTree3([-2, -17, 8, -18, -11, 3, 19, null, null, null, -4, null, null, null, 25]);
$minNode3 = minimumNode($tree3);
print_r(treeToArray3($minNode3));

echo "Test Case 4:\n";
$tree4 = toBinaryTree3([3, -3, 13, -7, 1, 6, 18, -10, -4, 0, 2, 5, 8, 15, 19]);
$minNode4 = minimumNode($tree4);
print_r(treeToArray3($minNode4));

echo "Test Case 5:\n";
$tree5 = toBinaryTree3([1, -5, 15, -9, -4, 10, 17, null, -6, null, 0, null, 14, 16, 19]);
$minNode5 = minimumNode($tree5);
print_r(treeToArray3($minNode5));

?>


<?php
class BinaryTree4 {
    public $data;
    public ?BinaryTree4 $left;
    public ?BinaryTree4 $right;

    public function __construct($data, $left = null, $right = null) {
        $this->data = $data;
        $this->left = $left;
        $this->right = $right;
    }
}

//木構造を再帰的に構築するヘルパー関数
function toBinaryTreeHelper4(array $arr, int $index): ?BinaryTree4{
    if($index >= count($arr) || $arr[$index] === null){
        return null;
    }

    $leftIndex = 2 * $index + 1;
    $rightIndex = 2 * $index + 2;

    return new BinaryTree4(
        $arr[$index],
        toBinaryTreeHelper4($arr, $leftIndex),
        toBinaryTreeHelper4($arr, $rightIndex)
    );
}

//配列から木を構築するメイン関数
function toBinaryTree4(array $nums): ?BinaryTree4{
    return toBinaryTreeHelper4($nums, 0);
}


//最小値を持つノードを取得する関数
function maximumNode(?BinaryTree4 $root): ?BinaryTree4{
    if($root === null) return null;

    while($root->right !== null){
        $root = $root->right;
    }

    return $root;
}


//木構造を配列に変換する関数
function treeToArray4(?BinaryTree4 $root): array{
    if($root === null) return [null];

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

// テストケース

echo "Test Case 1:\n";
$tree1 = toBinaryTree4([0, -10, 5, null, -3, null, 9]);
$minNode1 = maximumNode($tree1);
print_r(treeToArray4($minNode1));

echo "Test Case 2:\n";
$tree2 = toBinaryTree4([5, 3, 6, 2, 4, null, 7]);
$minNode2 = maximumNode($tree2);
print_r(treeToArray4($minNode2));

echo "Test Case 3:\n";
$tree2 = toBinaryTree4([5,3,7,2,4,6,9,null,null,null,null,null,null,8]);
$minNode2 = maximumNode($tree2);
print_r(treeToArray4($minNode2));

echo "Test Case 4:\n";
$tree3 = toBinaryTree4([-2, -17, 8, -18, -11, 3, 19, null, null, null, -4, null, null, null, 25]);
$minNode3 = maximumNode($tree3);
print_r(treeToArray4($minNode3));

echo "Test Case 5:\n";
$tree4 = toBinaryTree4([3, -3, 13, -7, 1, 6, 18, -10, -4, 0, 2, 5, 8, 15, 19]);
$minNode4 = maximumNode($tree4);
print_r(treeToArray4($minNode4));

echo "Test Case 6:\n";
$tree5 = toBinaryTree4([1, -5, 15, -9, -4, 10, 17, null, -6, null, 0, null, 14, 16, 19]);
$minNode5 = maximumNode($tree5);
print_r(treeToArray4($minNode5));

?>


<?php
class BinaryTree5 {
    public $data;
    public ?BinaryTree5 $left;
    public ?BinaryTree5 $right;

    public function __construct($data, $left = null, $right = null) {
        $this->data = $data;
        $this->left = $left;
        $this->right = $right;
    }
}


//配列から木を構築するメイン関数
function toBinaryTree5(array $nums): ?BinaryTree5{
    if(count($nums) === 0){
        return null;
    }

    $n = count($nums);
    $nodes = array_map(fn($val) => $val === null ? null : new BinaryTree5($val), $nums);

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


//最小値を持つノードを取得する関数
function successor(?BinaryTree5 $root, int $key): ?BinaryTree5{
    $successor = null;

    while($root !== null){
        if($key < $root->data){
            $successor = $root;
            $root = $root->left;
        }else if($key >= $root->data){
            $root = $root->right;
        }
    }

    return $successor;
}


//木構造を配列に変換する関数
function treeToArray5(?BinaryTree5 $root): array{
    if($root === null) return [null];

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

// テストケース

echo "Test Case 1:\n";
$tree1 = toBinaryTree5([0, -10, 5, null, -3, null, 9]);
$minNode1 = successor($tree1,5);
print_r(treeToArray5($minNode1));

echo "Test Case 2:\n";
$tree2 = toBinaryTree5([5, 3, 6, 2, 4, null, 7]);
$minNode2 = successor($tree2,5);
print_r(treeToArray5($minNode2));

echo "Test Case 3:\n";
$tree3 = toBinaryTree5([10,6,12,4,8,null,null,2]);
$minNode3 = successor($tree3,12);
print_r(treeToArray5($minNode3));

echo "Test Case 4:\n";
$tree4 = toBinaryTree5([10,6,12,4,8,null,null,2]);
$minNode4 = successor($tree4,2);
print_r(treeToArray5($minNode4));

echo "Test Case 5:\n";
$tree5 = toBinaryTree5([5,4,null]);
$minNode5 = successor($tree5,5);
print_r(treeToArray5($minNode5));

echo "Test Case 6:\n";
$tree6 = toBinaryTree5([-2, -17, 8, -18, -11, 3, 19, null, null, null, -4, null, null, null, 25]);
$minNode6 = successor($tree6, 8);
print_r(treeToArray5($minNode6));

echo "Test Case 7:\n";
$tree7 = toBinaryTree5([3, -3, 13, -7, 1, 6, 18, -10, -4, 0, 2, 5, 8, 15, 19]);
$minNode7 = successor($tree7,6);
print_r(treeToArray5($minNode7));

echo "Test Case 8:\n";
$tree8 = toBinaryTree5([3, -3, 13, -7, 1, 6, 18, -10, -4, 0, 2, 5, 8, 15, 19]);
$minNode8 = successor($tree8,3);
print_r(treeToArray5($minNode8));

echo "Test Case 9:\n";
$tree9 = toBinaryTree5([1, -5, 15, -9, -4, 10, 17, null, -6, null, 0, null, 14, 16, 19]);
$minNode9 = successor($tree9,10);
print_r(treeToArray5($minNode9));

echo "Test Case 10:\n";
$tree10 = toBinaryTree5([0, -10, 5, null, -3, null, 9]);
$minNode10 = successor($tree10,-3);
print_r(treeToArray5($minNode10));

?>


<?php
class BinaryTree6 {
    public $data;
    public ?BinaryTree6 $left;
    public ?BinaryTree6 $right;

    public function __construct($data, $left = null, $right = null) {
        $this->data = $data;
        $this->left = $left;
        $this->right = $right;
    }
}


//配列から木を構築するメイン関数
function toBinaryTree6(array $nums): ?BinaryTree6{
    if(count($nums) === 0){
        return null;
    }

    $n = count($nums);
    $nodes = array_map(fn($val) => $val === null ? null : new BinaryTree6($val), $nums);

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


//最小値を持つノードを取得する関数
function predecessor(?BinaryTree6 $root, int $key): ?BinaryTree6{
    $predecessor = null;

    while($root !== null){
        if($key > $root->data){
            $predecessor = $root;
            $root = $root->right;
        }else if($key <= $root->data){
            $root = $root->left;
        }
    }

    return $predecessor;
}


//木構造を配列に変換する関数
function treeToArray6(?BinaryTree6 $root): array{
    if($root === null) return [null];

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

// テストケース

echo "Test Case 1:\n";
$tree1 = toBinaryTree6([0, -10, 5, null, -3, null, 9]);
$minNode1 = predecessor($tree1,5);
print_r(treeToArray6($minNode1));

echo "Test Case 2:\n";
$tree2 = toBinaryTree6([5, 3, 6, 2, 4, null, 7]);
$minNode2 = predecessor($tree2,5);
print_r(treeToArray6($minNode2));

echo "Test Case 3:\n";
$tree3 = toBinaryTree6([10,6,12,4,8,null,null,2]);
$minNode3 = predecessor($tree3,12);
print_r(treeToArray6($minNode3));

echo "Test Case 4:\n";
$tree4 = toBinaryTree6([10,6,12,4,8,null,null,2]);
$minNode4 = predecessor($tree4,2);
print_r(treeToArray6($minNode4));

echo "Test Case 5:\n";
$tree5 = toBinaryTree6([5,null,7]);
$minNode5 = predecessor($tree5,5);
print_r(treeToArray6($minNode5));

echo "Test Case 6:\n";
$tree6 = toBinaryTree6([-2, -17, 8, -18, -11, 3, 19, null, null, null, -4, null, null, null, 25]);
$minNode6 = predecessor($tree6, 8);
print_r(treeToArray6($minNode6));

echo "Test Case 7:\n";
$tree7 = toBinaryTree6([3, -3, 13, -7, 1, 6, 18, -10, -4, 0, 2, 5, 8, 15, 19]);
$minNode7 = predecessor($tree7,6);
print_r(treeToArray6($minNode7));

echo "Test Case 8:\n";
$tree8 = toBinaryTree6([1, -5, 15, -9, -4, 10, 17, null, -6, null, 0, null, 14, 16, 19]);
$minNode8 = predecessor($tree8,10);
print_r(treeToArray6($minNode8));

?>
