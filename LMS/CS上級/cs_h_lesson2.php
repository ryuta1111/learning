<?php
class Node
{
    public $data;
    public $prev;
    public $next;

    public function __construct($data){
        $this->data = $data;
    }
}
class DoublyLinkedList{
    public $arr;
    public $head,$tail;

    public function __construct($arr){
        if(count($arr) <= 0){
            $this->head = new Node(null);
            $this->tail = $this->head;
            return;
        }

        $this->head = new Node($arr[0]);
        $currentNode = $this->head;

        for($i=1; $i<count($arr); $i++){
            $currentNode->next = new Node($arr[$i]);
            $currentNode->next->prev = $currentNode;
            $currentNode = $currentNode->next;
        }
        $this->tail = $currentNode;
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
$numList = new DoublyLinkedList([35,23,546,67,86,234,56,767,34,1,98,78,555]);

$numList->printList();

echo $numList->head->data .PHP_EOL;
echo $numList->head->next->data .PHP_EOL;

echo $numList->tail->data .PHP_EOL;
echo $numList->tail->prev->data .PHP_EOL;

?>

<br>

<?php
class Node2
{
    public $data;
    public $prev;
    public $next;

    public function __construct($data){
        $this->data = $data;
    }
}
class DoublyLinkedList2{
    public $arr;
    public $head,$tail;

    public function __construct($arr){
        if(count($arr) <= 0){
            $this->head = new Node2(null);
            $this->tail = $this->head;
            return;
        }

        $this->head = new Node2($arr[0]);
        $currentNode = $this->head;

        for($i=1; $i<count($arr); $i++){
            $currentNode->next = new Node2($arr[$i]);
            $currentNode->next->prev = $currentNode;
            $currentNode = $currentNode->next;
        }
        $this->tail = $currentNode;
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
            $str .= $iterator->data. " ";
            $iterator = $iterator->next;
        }
        echo $str .PHP_EOL;
    }
}
$numList = new DoublyLinkedList2([35,23,546,67,86,234,56,767,34,1,98,78,555]);

$numList->printList();

echo $numList->at(0)->data .PHP_EOL;
echo $numList->at(2)->data .PHP_EOL;
echo $numList->at(12)->data .PHP_EOL;

?>

<br>

<?php
class Node3
{
    public $data;
    public $prev;
    public $next;

    public function __construct($data){
        $this->data = $data;
    }
}
class DoublyLinkedList3{
    public $arr;
    public $head,$tail;

    public function __construct($arr){
        if(count($arr) <= 0){
            $this->head = new Node3(null);
            $this->tail = $this->head;
            return;
        }

        $this->head = new Node3($arr[0]);
        $currentNode = $this->head;

        for($i=1; $i<count($arr); $i++){
            $currentNode->next = new Node3($arr[$i]);
            $currentNode->next->prev = $currentNode;
            $currentNode = $currentNode->next;
        }
        $this->tail = $currentNode;
    }

    public function at($index){
        $iterator = $this->head;
        for($i=0; $i<$index; $i++){
            $iterator = $iterator->next;
            if($iterator == null) return null;
        }
        return $iterator;
    }

    public function reverse(){
        $reverse = $this->tail;
        $iterator = $this->tail->prev;

        $currentNode = $reverse;
        while($iterator != null){
            $currentNode->next = $iterator;

            $iterator = $iterator->prev;
            if($iterator != null) $iterator->next = null;

            $currentNode->next->prev = $currentNode;
            $currentNode = $currentNode->next;
        }
        $this->tail = $currentNode;
        $this->head = $reverse;
    }

    public function printInReverse(){
        $iterator = $this->tail;
        $str = "";
        while($iterator != null){
            $str .= $iterator->data . " ";
            $iterator = $iterator->prev;
        }
        echo $str.PHP_EOL;
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
$numList = new DoublyLinkedList3([35,23,546,67,86,234,56,767,34,1,98,78,555]);

$numList->printList();
$numList->printInReverse();

$numList->printList();
$numList->reverse();

?>

<br>

<?php
class Node4
{
    public $data;
    public $prev;
    public $next;

    public function __construct($data){
        $this->data = $data;
    }
}
class DoublyLinkedList4{
    public $arr;
    public $head,$tail;

    public function __construct($arr){
        if(count($arr) <= 0){
            $this->head = new Node4(null);
            $this->tail = $this->head;
            return;
        }

        $this->head = new Node4($arr[0]);
        $currentNode = $this->head;

        for($i=1; $i<count($arr); $i++){
            $currentNode->next = new Node4($arr[$i]);
            $currentNode->next->prev = $currentNode;
            $currentNode = $currentNode->next;
        }
        $this->tail = $currentNode;
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
        $this->head->prev = $newNode;
        $newNode->next = $this->head;
        $newNode->prev = null;
        $this->head = $newNode;
    }

    public function append($newNode){
        $this->tail->next = $newNode;
        $newNode->next = null;
        $newNode->prev = $this->tail;
        $this->tail = $newNode;
    }

    public function addNextNode($node, $newNode){
        $tempNode = $node->next;
        $node->next = $newNode;
        $newNode->next = $tempNode;
        $newNode->prev = $node;

        if($node == $this->tail) $this->tail = $newNode;
        else $tempNode->prev = $newNode;
    }

    public function reverse(){
        $reverse = $this->tail;
        $iterator = $this->tail->prev;

        $currentNode = $reverse;
        while($iterator != null){
            $currentNode->next = $iterator;

            $iterator = $iterator->prev;
            if($iterator !=null) $iterator->next = null;

            $currentNode->next->prev = $currentNode;
            $currentNode = $currentNode->next;
        }
        $this->tail = $currentNode;
        $this->head = $reverse;
    }

    public function printInReverse(){
        $iterator = $this->tail;
        $str = "";
        while($iterator != null){
            $str .= $iterator->data . " ";
            $iterator = $iterator->prev;
        }
        echo $str.PHP_EOL;
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
$numList = new DoublyLinkedList4([35,23,546,67,86,234,56,767,34,1,98,78,555]);

$numList->printList();
//45をpreAppend
$numList->preAppend(new Node4(45));
echo $numList->head->data .PHP_EOL;
$numList->printList();

echo " " .PHP_EOL;

//71をappend
$numList->append(new Node4(71));
echo $numList->tail->data .PHP_EOL;
$numList->printList();

echo " " .PHP_EOL;

$numList->addNextNode($numList->at(3), new Node4(4));
$numList->printList();
echo $numList->tail->data .PHP_EOL;

echo " " .PHP_EOL;

$numList->addNextNode($numList->at(15), new Node4(679));
$numList->printList();
echo $numList->tail->data .PHP_EOL;

echo " " .PHP_EOL;

$numList->printInReverse();

?>


<br>


<?php
class Node5
{
    public $data;
    public $prev;
    public $next;

    public function __construct($data){
        $this->data = $data;
    }
}
class DoublyLinkedList5{
    public $arr;
    public $head,$tail;

    public function __construct($arr){
        if(count($arr) <= 0){
            $this->head = new Node5(null);
            $this->tail = $this->head;
            return;
        }

        $this->head = new Node5($arr[0]);
        $currentNode = $this->head;

        for($i=1; $i<count($arr); $i++){
            $currentNode->next = new Node5($arr[$i]);
            $currentNode->next->prev = $currentNode;
            $currentNode = $currentNode->next;
        }
        $this->tail = $currentNode;
    }

    public function at($index){
        $iterator = $this->head;
        for($i=0; $i<$index; $i++){
            $iterator = $iterator->next;
            if($iterator == null) return null;
        }
        return $iterator;
    }

    public function popFront(){
        $this->head = $this->head->next;
        $this->head->prev = null;
    }

    public function pop(){
        $this->tail = $this->tail->prev;
        $this->tail->next = null;
    }

    public function preAppend($newNode){
        $this->head->prev = $newNode;
        $newNode->next = $this->head;
        $newNode->prev = null;
        $this->head = $newNode;
    }

    public function append($newNode){
        $this->tail->next = $newNode;
        $newNode->next = null;
        $newNode->prev = $this->tail;
        $this->tail = $newNode;
    }

    public function addNextNode($node, $newNode){
        $tempNode = $node->next;
        $node->next = $newNode;
        $newNode->next = $tempNode;
        $newNode->prev = $node;

        if($node == $this->tail) $this->tail = $newNode;
        else $tempNode->prev = $newNode;
    }

    public function deleteNode($node){
        if($node == $this->tail) return $this->pop();
        if($node == $this->head) return $this->popFront();

        $node->prev->next = $node->next;
        $node->next->prev = $node->prev;
    }

    public function reverse(){
        $reverse = $this->tail;
        $iterator = $this->tail->prev;

        $currentNode = $reverse;
        while($iterator != null){
            $currentNode->next = $iterator;

            $iterator = $iterator->prev;
            if($iterator !=null) $iterator->next = null;

            $currentNode->next->prev = $currentNode;
            $currentNode = $currentNode->next;
        }
        $this->tail = $currentNode;
        $this->head = $reverse;
    }

    public function printInReverse(){
        $iterator = $this->tail;
        $str = "";
        while($iterator != null){
            $str .= $iterator->data . " ";
            $iterator = $iterator->prev;
        }
        echo $str.PHP_EOL;
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
$numList = new DoublyLinkedList5([35,23,546,67,86,234,56,767,34,1,98,78,555]);

//pop
$numList->printList();

$numList->popFront();
$numList->pop();

$numList->printList();
$numList->printInReverse();
echo " " .PHP_EOL;

//要素を削除
echo "Deleting in 0(1)".PHP_EOL;
$numList->printList();

$numList->deleteNode($numList->at(3));
$numList->deleteNode($numList->at(9));
$numList->deleteNode($numList->at(0));

$numList->printList();
$numList->printInReverse();
echo " " .PHP_EOL;

?>