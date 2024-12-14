<?php
class BinaryTree
{
    public $data;
    //左二分木
    public $left;
    //右二分木
    public $right;

    public function __construct($data, $left = null, $right = null){
        $this->data = $data;
        $this->left = $left;
        $this->right = $right;
    }
}

$binaryTree = new BinaryTree(1);
$node2 = new BinaryTree(2);
$node3 = new BinaryTree(3);

$binaryTree->left = $node2;
$binaryTree->right = $node3;

print("Root:" .$binaryTree->data. PHP_EOL);
print("Left:" .$binaryTree->left->data. PHP_EOL);
print("Right:" .$binaryTree->right->data. PHP_EOL);

?>


<?php
function linearSearch($key, $haystack){
    for($i=0; $i<count($haystack); $i++){
        if($key === $haystack[$i])return $i;
    }
    return -1;
}
$l1 = [3,4,2,5,46,23,3,55,67,24,65];
echo(linearSearch(5,$l1)) .PHP_EOL;
echo(linearSearch(24,$l1)) .PHP_EOL;

?>



<?php
class BinaryTree2
{
    public $data;
    public $left;
    public $right;

    public function __construct($data, $left=null, $right=null){
        $this->data = $data;
        $this->left = $left;
        $this->right = $right;
    }
}

function sortedArrayToBSTHelper($arr, $start, $end){
    if($start === $end) return new BinaryTree2($arr[$start]);

    $mid = floor(($start+$end)/2);

    $left = null;
    if($mid-1 >= $start) $left = sortedArrayToBSTHelper($arr, $start, $mid-1);

    $right = null;
    if($mid+1 <= $end) $right = sortedArrayToBSTHelper($arr, $mid+1, $end);

    $root = new BinaryTree2($arr[$mid], $left, $right);
    return $root;
}

function sortedArrayToBST($nums){
    if(count($nums) === 0) return null;
    return sortedArrayToBSTHelper($nums, 0, count($nums)-1);
}

$balancedBST = sortedArrayToBST([1,2,3,4,5,6,7,8,9,10,11]);
print(json_encode($balancedBST));

?>



<?php
class BinaryTree3
{
    public $data;
    public $left;
    public $right;

    public function __construct($data, $left=null, $right=null){
        $this->data = $data;
        $this->left = $left;
        $this->right = $right;
    }
}

function sortedArrayToBSTHelper2($arr, $start, $end){
    if($start === $end) return new BinaryTree3($arr[$start]);

    $mid = floor(($start+$end)/2);

    $left = null;
    if($mid-1 >= $start) $left = sortedArrayToBSTHelper2($arr, $start, $mid-1);

    $right = null;
    if($mid+1 <= $end) $right = sortedArrayToBSTHelper2($arr, $mid+1, $end);

    $root = new BinaryTree2($arr[$mid], $left, $right);
    return $root;
}

function sortedArrayToBST2($nums){
    if(count($nums) === 0) return null;
    return sortedArrayToBSTHelper2($nums, 0, count($nums)-1);
}

//再帰
function keyExist($key, $bst){
    if($bst == null)return false;
    if($bst->data == $key) return true;

    if($bst->data > $key) return keyExist($key, $bst->left);
    else return keyExist($key, $bst->right);
}

$balancedBST = sortedArrayToBST2([1,2,3,4,5,6,7,8,9,10,11]);
print((keyExist(6,$balancedBST)? "True" : "False"). PHP_EOL);
print((keyExist(10,$balancedBST)? "True" : "False"). PHP_EOL);
print((keyExist(45,$balancedBST)? "True" : "False"). PHP_EOL);

?>



<?php
class BinaryTree4
{
    public $data;
    public $left;
    public $right;

    public function __construct($data, $left=null, $right=null){
        $this->data = $data;
        $this->left = $left;
        $this->right = $right;
    }
}

function sortedArrayToBSTHelper3($arr, $start, $end){
    if($start === $end) return new BinaryTree4($arr[$start]);

    $mid = floor(($start+$end)/2);

    $left = null;
    if($mid-1 >= $start) $left = sortedArrayToBSTHelper3($arr, $start, $mid-1);

    $right = null;
    if($mid+1 <= $end) $right = sortedArrayToBSTHelper3($arr, $mid+1, $end);

    $root = new BinaryTree4($arr[$mid], $left, $right);
    return $root;
}

function sortedArrayToBST3($nums){
    if(count($nums) === 0) return null;
    return sortedArrayToBSTHelper3($nums, 0, count($nums)-1);
}

//再帰
function keyExist2($key, $bst){
    $iterator = $bst;
    while($iterator != null){
        if($iterator->data == $key) return true;

        if($iterator->data > $key) $iterator = $iterator->left;
        else $iterator = $iterator->right;
    }

    return false;
}

$balancedBST = sortedArrayToBST3([1,2,3,4,5,6,7,8,9,10,11]);
print((keyExist2(6,$balancedBST)? "True" : "False"). PHP_EOL);
print((keyExist2(10,$balancedBST)? "True" : "False"). PHP_EOL);
print((keyExist2(45,$balancedBST)? "True" : "False"). PHP_EOL);

?>



<?php
class BinaryTree5
{
    public $data;
    public $left;
    public $right;

    public function __construct($data, $left=null, $right=null){
        $this->data = $data;
        $this->left = $left;
        $this->right = $right;
    }
}

class BinarySearchTree{
    public $root;

    public function __construct($nums){
        $this->root = $this->sortedArrayToBST($nums);
    }

    private function sortedArrayToBST($nums){
        if(count($nums) === 0) return null;
        return $this->sortedArrayToBSTHelper($nums, 0, count($nums)-1);
    }

    private function sortedArrayToBSTHelper($arr, $start, $end){
        if($start > $end) return null;

        $mid = floor(($start + $end) / 2);

        $left = $this->sortedArrayToBSTHelper($arr, $start, $mid-1);
        $right = $this->sortedArrayToBSTHelper($arr, $mid+1, $end);

        return new BinaryTree5($arr[$mid], $left, $right);
    }

    public function search($key){
        return $this->searchRecursive($this->root, $key);
    }

    private function searchRecursive($node, $key){
        if($node === null || $node->data === $key){
            return $node;
        }

        if($key < $node->data){
            return $this->searchRecursive($node->left, $key);
        }else{
            return $this->searchRecursive($node->right, $key);
        }
    }

    public function keyExist($key){
        return $this->search($key) !== null;
    }
}

$keys = [1,2,3,4,5,6,7,8,9,10,11];

$balancedBST = new BinarySearchTree($keys);


print(($balancedBST->keyExist(6)? "True" : "False").PHP_EOL);
print(json_encode($balancedBST->search(6)).PHP_EOL);
print(($balancedBST->keyExist(10)? "True" : "False").PHP_EOL);
print(json_encode($balancedBST->search(10)).PHP_EOL);
print(($balancedBST->keyExist(34)? "True" : "False").PHP_EOL);
print(json_encode($balancedBST->search(34)).PHP_EOL);