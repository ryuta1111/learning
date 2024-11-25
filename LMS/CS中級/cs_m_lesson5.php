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

