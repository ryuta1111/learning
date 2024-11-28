<?php
class SinglyLinkedListNode{
    public $data;
    public ?SinglyLinkedListNode $next;

    public function __construct($data){
        $this->data = $data;
        $this->next = null;
    }
}

function linkedListLength(?SinglyLinkedListNode $head):int{
    $count = 0;
    $current = $head;
    while($current !== null){
        $count++;
        $current = $current->next;
    }
    return $count;
}

function SinglyLinkedList(array $values): ?SinglyLinkedListNode{
    if(empty($values)){
        return null;
    }

    $head = new SinglyLinkedListNode($values[0]);
    $current = $head;

    for($i=1; $i<count($values); $i++){
        $current->next = new SinglyLinkedListNode($values[$i]);
        $current = $current->next;
    }
    return $head;
}

echo "問題1".PHP_EOL;
$head = SinglyLinkedList([3,2,1,5,6,4]);
echo linkedListLength($head).PHP_EOL;

$head = SinglyLinkedList([7,8,2,3,1,7,8,11,4,3,2]);
echo linkedListLength($head).PHP_EOL;

$head = SinglyLinkedList([34,35,64,34,10,2,14,5,353,23,35,63,23]);
echo linkedListLength($head).PHP_EOL;

$head = SinglyLinkedList([1]);
echo linkedListLength($head).PHP_EOL;

?>





<?php
class SinglyLinkedListNode2{
    public $data;
    public ?SinglyLinkedListNode2 $next;

    public function __construct($data){
        $this->data = $data;
        $this->next = null;
    }
}

function linkedListLastValue(?SinglyLinkedListNode2 $head):int{
    $current = $head;

    while($current->next !== null){
        $current = $current->next;
    }
    return $current->data;
}

function SinglyLinkedList2(array $values): ?SinglyLinkedListNode2{
    if(empty($values)){
        return null;
    }

    $head = new SinglyLinkedListNode2($values[0]);
    $current = $head;

    for($i=1; $i<count($values); $i++){
        $current->next = new SinglyLinkedListNode2($values[$i]);
        $current = $current->next;
    }
    return $head;
}

echo "問題2".PHP_EOL;
$head = SinglyLinkedList2([3,2,1,5,6,4]);
echo linkedListLastValue($head).PHP_EOL;

$head = SinglyLinkedList2([7,8,2,3,1,7,8,11,4,3,2]);
echo linkedListLastValue($head).PHP_EOL;

$head = SinglyLinkedList2([34,35,64,34,10,2,14,5,353,23,35,63,23]);
echo linkedListLastValue($head).PHP_EOL;

$head = SinglyLinkedList2([1]);
echo linkedListLastValue($head).PHP_EOL;

?>




<?php
class SinglyLinkedListNode3{
    public $data;
    public ?SinglyLinkedListNode3 $next;

    public function __construct($data){
        $this->data = $data;
        $this->next = null;
    }
}

function deleteTail(?SinglyLinkedListNode3 $head):int{
    $current = $head;

    while($current->next !== null){
        $current = $current->next;
    }
    return $current->data;
}

function SinglyLinkedList3(array $values): ?SinglyLinkedListNode3{
    if(empty($values)){
        return null;
    }

    $head = new SinglyLinkedListNode3($values[0]);
    $current = $head;

    for($i=1; $i<count($values); $i++){
        $current->next = new SinglyLinkedListNode3($values[$i]);
        $current = $current->next;
    }
    return $head;
}

function printList(array $values){
    $iterator = $this->head;
    $str = "";
    while($iterator != null){
        $str .= $iterator->data. " ";
        $iterator = $iterator->next;
    }
    echo $str .PHP_EOL;
}

echo "問題2".PHP_EOL;
$head = SinglyLinkedList3([3,2,1,5,6,4]);
echo deleteTail($head).PHP_EOL;

$head = SinglyLinkedList3([7,8,2,3,1,7,8,11,4,3,2]);
echo deleteTail($head).PHP_EOL;

$head = SinglyLinkedList3([34,35,64,34,10,2,14,5,353,23,35,63,23]);
echo deleteTail($head).PHP_EOL;

$head = SinglyLinkedList3([1]);
echo deleteTail($head).PHP_EOL;

?>