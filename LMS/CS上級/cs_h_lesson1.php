<?php
class Node
{
    public $data;
    public $next;

    public function __construct($data){
        $this->data = $data;
    }
}

class SinglyLinkedList{
    public $head;

    public function __construct($head){
        $this->head = $head;
    }
}

$node1 = new Node(4);
$node2 = new Node(65);
$node3 = new Node(24);

$numList = new SinglyLinkedList($node1);

$numList->head->next = $node2;
$numList->head->next->next = $node3;

$currentNode = $numList->head;
while($currentNode != null){
    echo $currentNode->data .PHP_EOL;
    $currentNode = $currentNode->next;
}

?>


<?php
class Node2
{
    public $data;
    public $next;

    public function __construct($data){
        $this->data = $data;
    }
}

class SinglyLinkedList2{
    public $arr;
    public $head;

    public function __construct($arr){
        $this->head = count($arr) > 0 ? new Node2($arr[0]) : new Node2(null);
        $currentNode = $this->head;
        for($i=1; $i<count($arr); $i++){
            $currentNode->next = new Node2($arr[$i]);
            $currentNode = $currentNode->next;
        }
    }

    public function at($index){
        $iterator = $this->head;
        for($i=0; $i<$index; $i++){
            $iterator = $iterator->next;
            if($iterator == null) return null;
        }
        return $iterator;
    }
}
$numList = new SinglyLinkedList2([35,23,546,67,86,234,56,767,34,1,98,78,555]);

echo $numList->at(2)->data .PHP_EOL;
echo $numList->at(12)->data .PHP_EOL;


?>

<?php
class Node3
{
    public $data;
    public $next;

    public function __construct($data){
        $this->data = $data;
    }
}

class SinglyLinkedList3{
    public $arr;
    public $head;

    public function __construct($arr){
        $this->head = count($arr) > 0 ? new Node3($arr[0]) : new node3(null);
        $currentNode = $this->head;
        for($i=1; $i<count($arr); $i++){
            $currentNode->next = new node3($arr[$i]);
            $currentNode = $currentNode->next;
        }
    }

    public function at($index){
        $iterator = $this->head;
        for($i=0; $i<$index; $i++){
            $iterator = $iterator->next;
            if($iterator == null) return null;
        }
        return $iterator;
    }

    public function findNode($key){
        $current = $this->head;
        while($current !== null){
            if($current->data === $key){
                return $current;
            }
            $current = $current->next;
        }
        return null;
    }
}
$numList = new SinglyLinkedList3([35,23,546,67,86,234,56,767,34,1,98,78,555]);
$foundNode = $numList->findNode(34);

if($foundNode !== null){
    echo "ノードが見つかりました：" . $foundNode->data . "\n";
}else{
    echo "ノードが見つかりませんでした。 \n";
}

?>

<br>

<?php
class node4
{
    public $data;
    public $next;

    public function __construct($data){
        $this->data = $data;
    }
}

class SinglyLinkedList4{
    public $arr;
    public $head;

    public function __construct($arr){
        $this->head = count($arr) > 0 ? new node4($arr[0]) : new node4(null);
        $currentNode = $this->head;
        for($i=1; $i<count($arr); $i++){
            $currentNode->next = new node4($arr[$i]);
            $currentNode = $currentNode->next;
        }
    }

    public function at($index){
        $iterator = $this->head;
        for($i=0; $i<$index; $i++){
            $iterator = $iterator->next;
            if($iterator == null) return null;
        }
        return $iterator;
    }

    public function printList(){
        $iterator = $this->head;
        $str = "";
        while($iterator != null){
            $str .= $iterator->data . " ";
            $iterator = $iterator->next;
        }
        echo $str.PHP_EOL;
    }
}
$numList = new SinglyLinkedList4([35,23,546,67,86,234,56,767,34,1,98,78,555]);

echo $numList->at(2)->data .PHP_EOL;
echo $numList->at(3)->data .PHP_EOL;
echo $numList->at(4)->data .PHP_EOL;

$numList->printList();

$thirdEle = $numList->at(2);
$tempNode = $thirdEle->next;
$newNode = new Node4(40);
$thirdEle->next = $newNode;
$newNode->next = $tempNode;

echo $numList->at(2)->data.PHP_EOL;
echo $numList->at(3)->data.PHP_EOL;
echo $numList->at(4)->data.PHP_EOL;
$numList->printList();

?>

<br>

<?php
class node5
{
    public $data;
    public $next;

    public function __construct($data){
        $this->data = $data;
    }

    public function addNextNode($newNode){
        $tempNode = $this->next;
        $this->next = $newNode;
        $newNode->next = $tempNode;
    }
}
class SinglyLinkedList5{
    public $arr;
    public $head;

    public function __construct($arr){
        $this->head = count($arr) > 0 ? new node5($arr[0]) : new node5(null);
        $currentNode = $this->head;
        for($i=1; $i<count($arr); $i++){
            $currentNode->next = new node5($arr[$i]);
            $currentNode = $currentNode->next;
        }
    }

    public function at($index){
        $iterator = $this->head;
        for($i=0; $i<$index; $i++){
            $iterator = $iterator->next;
            if($iterator == null) return null;
        }
        return $iterator;
    }

    public function printList(){
        $iterator = $this->head;
        $str = "";
        while($iterator != null){
            $str .= $iterator->data . " ";
            $iterator = $iterator->next;
        }
        echo $str.PHP_EOL;
    }
}
$numList = new SinglyLinkedList5([35,23,546,67,86,234,56,767,34,1,98,78,555]);
$numList->printList();

$iterator = $numList->head;
$i=0;
while($iterator != null){
    $currentNode = $iterator;
    $iterator = $iterator->next;
    if($i%2 == 0) $currentNode->addNextNode(new Node5($currentNode->data*2));
    $i++;
}
$numList->printList();
?>

<br>

<?php
class node6
{
    public $data;
    public $next;

    public function __construct($data){
        $this->data = $data;
    }

    public function addNextNode($newNode){
        $tempNode = $this->next;
        $this->next = $newNode;
        $newNode->next = $tempNode;
    }
}
class SinglyLinkedList6{
    public $arr;
    public $head;

    public function __construct($arr){
        $this->head = count($arr) > 0 ? new node6($arr[0]) : new node6(null);
        $currentNode = $this->head;
        for($i=1; $i<count($arr); $i++){
            $currentNode->next = new node6($arr[$i]);
            $currentNode = $currentNode->next;
        }
    }

    public function at($index){
        $iterator = $this->head;
        for($i=0; $i<$index; $i++){
            $iterator = $iterator->next;
            if($iterator == null) return null;
        }
        return $iterator;
    }

    public function preAppend($newNode){
        $newNode->next = $this->head;
        $this->head = $newNode;
    }

    public function printList(){
        $iterator = $this->head;
        $str = "";
        while($iterator != null){
            $str .= $iterator->data. " ";
            $iterator = $iterator->next;
        }
        echo $str .PHP_EOL;
    }
}
$numList = new SinglyLinkedList6([35,23,546,67,86,234,56,767,34,1,98,78,555]);

$numList->printList();
$numList->preAppend(new node6(45));
$numList->preAppend(new node6(236));;
$numList->printLIst();
?>


<br>

<?php
class node7
{
    public $data;
    public $next;

    public function __construct($data){
        $this->data = $data;
    }

    public function addNextNode($newNode){
        $tempNode = $this->next;
        $this->next = $newNode;
        $newNode->next = $tempNode;
    }
}
class SinglyLinkedList7{
    public $arr;
    public $head;

    public function __construct($arr){
        $this->head = count($arr) > 0 ? new node7($arr[0]) : new node7(null);
        $currentNode = $this->head;
        for($i=1; $i<count($arr); $i++){
            $currentNode->next = new node7($arr[$i]);
            $currentNode = $currentNode->next;
        }
    }

    public function at($index){
        $iterator = $this->head;
        for($i=0; $i<$index; $i++){
            $iterator = $iterator->next;
            if($iterator == null) return null;
        }
        return $iterator;
    }

    public function preAppend($newNode){
        $newNode->next = $this->head;
        $this->head = $newNode;
    }

    public function afterAppend($data){
        $newNode = new Node7($data);

        if($this->head === null){
            $this->head = $newNode;
            return;
        }

        $current = $this->head;
        while($current->next !== null){
            $current = $current->next;
        }
        $current->next = $newNode;
    }

    public function printList(){
        $iterator = $this->head;
        $str = "";
        while($iterator != null){
            $str .= $iterator->data. " ";
            $iterator = $iterator->next;
        }
        echo $str .PHP_EOL;
    }
}
$numList = new SinglyLinkedList7([35,23,546,67,86,234,56,767,34,1,98,78,555]);

$numList->printList();
$numList->afterAppend(45);
$numList->afterAppend(236);;
$numList->printLIst();
?>


<br>

<?php
class node8
{
    public $data;
    public $next;

    public function __construct($data){
        $this->data = $data;
    }

    public function addNextNode($newNode){
        $tempNode = $this->next;
        $this->next = $newNode;
        $newNode->next = $tempNode;
    }
}
class SinglyLinkedList8{
    public $arr;
    public $head;

    public function __construct($arr){
        $this->head = count($arr) > 0 ? new node8($arr[0]) : new node8(null);
        $currentNode = $this->head;
        for($i=1; $i<count($arr); $i++){
            $currentNode->next = new node8($arr[$i]);
            $currentNode = $currentNode->next;
        }
    }

    public function at($index){
        $iterator = $this->head;
        for($i=0; $i<$index; $i++){
            $iterator = $iterator->next;
            if($iterator == null) return null;
        }
        return $iterator;
    }

    public function preAppend($newNode){
        $newNode->next = $this->head;
        $this->head = $newNode;
    }

    public function popFront(){
        $this->head = $this->head->next;
    }

    public function delete($index){
        if($index == 0) return $this->popFront();
        $iterator = $this->head;
        for($i=0; $i<$index-1; $i++){
            if($iterator->next == null) return null;
            $iterator = $iterator->next;
        }
        $iterator->next = $iterator->next->next;
    }

    public function printList(){
        $iterator = $this->head;
        $str = "";
        while($iterator != null){
            $str .= $iterator->data. " ";
            $iterator = $iterator->next;
        }
        echo $str .PHP_EOL;
    }
}
$numList = new SinglyLinkedList8([35,23,546,67,86,234,56,767,34,1,98,78,555]);

$numList->printList();

$numList->popFront();
$numList->popFront();
$numList->printList();

$numList->delete(4);
$numList->printList();

$numList->delete(9);
$numList->printList();
?>
