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

function deleteTail(?SinglyLinkedListNode3 $head){
    $current = $head;
    $array = "";
    while($current->next !== null){
        $array .= $current->data . "→";
        $current = $current->next;
        if($current->next === null){
            $array .= "END";
        }
    }
    return $array;
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


echo "問題3".PHP_EOL;
$array = SinglyLinkedList3([3,3,2,10,34,45,67,356]);
echo deleteTail($array).PHP_EOL;

$array = SinglyLinkedList3([8,7,21,3,2,7]);
echo deleteTail($array).PHP_EOL;

$array = SinglyLinkedList3([8,8,7,7,5]);
echo deleteTail($array).PHP_EOL;

$array = SinglyLinkedList3([8,6,3,5,7]);
echo deleteTail($array).PHP_EOL;

$array = SinglyLinkedList3([8,8,7,7,6,6,5,5,4,4]);
echo deleteTail($array).PHP_EOL;

$array = SinglyLinkedList3([2,5,10,25,50]);
echo deleteTail($array).PHP_EOL;

$array = SinglyLinkedList3([20,-5,34,45,67,356,34,687,31,-34,5]);
echo deleteTail($array).PHP_EOL;

?>




<?php
class SinglyLinkedListNode4{
    public $data;
    public ?SinglyLinkedListNode4 $next;

    public function __construct($data){
        $this->data = $data;
        $this->next = null;
    }
}

function findingMinNUm(?SinglyLinkedListNode4 $head):int{
    $minValue = $head->data;
    $current = $head;
    $minIndex = 0;
    $currentIndex = 0;

    while($current !== null){
        if($current->data < $minValue){
            $minValue = $current->data;
            $minIndex = $currentIndex;
        }
        if($current->data === $minValue){
            $minValue = $current->data;
            $minIndex = $currentIndex;
        }
        $current = $current->next;
        $currentIndex ++;
    }
    return $minIndex;
}

function SinglyLinkedList4(array $values): ?SinglyLinkedListNode4{
    if(empty($values)){
        return null;
    }

    $head = new SinglyLinkedListNode4($values[0]);
    $current = $head;

    for($i=1; $i<count($values); $i++){
        $current->next = new SinglyLinkedListNode4($values[$i]);
        $current = $current->next;
    }
    return $head;
}


echo "問題4".PHP_EOL;
$array = SinglyLinkedList4([1,2,3,4,-1,2]);
echo findingMinNum($array).PHP_EOL;

$array = SinglyLinkedList4([1,1,1]);
echo findingMinNum($array).PHP_EOL;

$array = SinglyLinkedList4([3,3,2,10,34,45,67,356]);
echo findingMinNum($array).PHP_EOL;

$array = SinglyLinkedList4([20,-5,34,45,67,356,34,687,31,-34,5]);
echo findingMinNum($array).PHP_EOL;

$array = SinglyLinkedList4([71,8,16,33]);
echo findingMinNum($array).PHP_EOL;

$array = SinglyLinkedList4([101,54,82002,93,1207,131,1800,99]);
echo findingMinNum($array).PHP_EOL;

$array = SinglyLinkedList4([580,781]);
echo findingMinNum($array).PHP_EOL;

$array = SinglyLinkedList4([2,4,52,108]);
echo findingMinNum($array).PHP_EOL;

$array = SinglyLinkedList4([61,73,27,3001]);
echo findingMinNum($array).PHP_EOL;

?>