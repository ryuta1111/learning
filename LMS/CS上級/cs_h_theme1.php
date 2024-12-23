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
    $str = "";
    while($current->next !== null){
        $str .= $current->data . "→";
        $current = $current->next;
        if($current->next === null){
            $str .= "END";
        }
    }
    return $str;
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

function findingMinNum(?SinglyLinkedListNode4 $head):int{
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



<?php
class SinglyLinkedListNode5{
    public $data;
    public ?SinglyLinkedListNode5 $next;

    public function __construct($data){
        $this->data = $data;
        $this->next = null;
    }
}

function linkedListSearch(?SinglyLinkedListNode5 $head, int $data):int{
    $index = 0;
    $current = $head;

    while($current !== null){
        if($current->data === $data){
            return $index;
        }
        $current = $current->next;
        $index++;
    }
    return -1;
}

function SinglyLinkedList5(array $values): ?SinglyLinkedListNode5{
    if(empty($values) && empty($value)){
        return null;
    }

    $head = new SinglyLinkedListNode5($values[0]);
    $current = $head;

    for($i=1; $i<count($values); $i++){
        $current->next = new SinglyLinkedListNode5($values[$i]);
        $current = $current->next;
    }
    return $head;
}


echo "問題5".PHP_EOL;
$array = SinglyLinkedList5([1,3,4,5]);
echo linkedListSearch($array,3).PHP_EOL;

$array = SinglyLinkedList5([1,1,1,1]);
echo linkedListSearch($array,1).PHP_EOL;

$array = SinglyLinkedList5([1,6,3,63,68,9,5]);
echo linkedListSearch($array,5).PHP_EOL;

$array = SinglyLinkedList5([3,3,2,10,34,45,67,356]);
echo linkedListSearch($array,67).PHP_EOL;

$array = SinglyLinkedList5([20,-5,34,45,67,356,34,687,31,-34,5]);
echo linkedListSearch($array,-5).PHP_EOL;

$array = SinglyLinkedList5([71,8,16,33]);
echo linkedListSearch($array,71).PHP_EOL;

$array = SinglyLinkedList5([71,9,16,33]);
echo linkedListSearch($array,686).PHP_EOL;

$array = SinglyLinkedList5([101,54,822,93,131,1800,99]);
echo linkedListSearch($array,1800).PHP_EOL;

$array = SinglyLinkedList5([580,781]);
echo linkedListSearch($array,781).PHP_EOL;

$array = SinglyLinkedList5([2,4,52,108]);
echo linkedListSearch($array,52).PHP_EOL;

$array = SinglyLinkedList5([61,73,27,3001]);
echo linkedListSearch($array,45).PHP_EOL;

?>



<?php
class SinglyLinkedListNode6{
    public $data;
    public ?SinglyLinkedListNode6 $next;

    public function __construct($data){
        $this->data = $data;
        $this->next = null;
    }
}

function insertAtPosition(?SinglyLinkedListNode6 $head, int $position, int $data){
    $newNode = new SinglyLinkedListNode6($data);
    $index = 0;
    $current = $head;

    while($current->next !== null && $index < $position){
        $current = $current->next;
        $index++;
    }
    $newNode->next = $current->next;
    $current->next = $newNode;

    return $head;
    }

function SinglyLinkedList6(array $values): ?SinglyLinkedListNode6{
    if(empty($values) && empty($value)){
        return null;
    }

    $head = new SinglyLinkedListNode6($values[0]);
    $current = $head;

    for($i=1; $i<count($values); $i++){
        $current->next = new SinglyLinkedListNode6($values[$i]);
        $current = $current->next;
    }
    return $head;
}

function printLinkedList(?SinglyLinkedListNode6 $head): void{
    $current = $head;
    while($current->next !== null){
        echo $current->data . " → ";
        $current = $current->next;
        if($current->next === null){
            echo $current->data . " → END";
        }
    }

}


echo "問題6".PHP_EOL;
$array = SinglyLinkedList6([2,4]);
echo printLinkedList(insertAtPosition($array,0,5)).PHP_EOL;

$array = SinglyLinkedList6([2,4]);
echo printLinkedList(insertAtPosition($array,1,5)).PHP_EOL;

$array = SinglyLinkedList6([2,10,34,45,67,356]);
echo printLinkedList(insertAtPosition($array,2,5)).PHP_EOL;

$array = SinglyLinkedList6([2,10,34,45,67,356]);
echo printLinkedList(insertAtPosition($array,2,3)).PHP_EOL;

$array = SinglyLinkedList6([2,10,34,45,67,356]);
echo printLinkedList(insertAtPosition($array,5,3)).PHP_EOL;

$array = SinglyLinkedList6([20,-5,34,45,67,356]);
echo printLinkedList(insertAtPosition($array,34,50)).PHP_EOL;

$array = SinglyLinkedList6([20,-5,34,45,67,356,34,687,31,-34,5]);
echo printLinkedList(insertAtPosition($array,20,54)).PHP_EOL;

$array = SinglyLinkedList6([20,-5,34,45,67,356,34,687,31,-34,5]);
echo printLinkedList(insertAtPosition($array,4,54)).PHP_EOL;
?>



<?php
class SinglyLinkedListNode7{
    public $data;
    public ?SinglyLinkedListNode7 $next;

    public function __construct($data){
        $this->data = $data;
        $this->next = null;
    }
}

function insertNodeInSorted(?SinglyLinkedListNode7 $head, int $data){
    $current = $head;
    $newNode = new SinglyLinkedListNode7($data);
    $newNode->next = $current->next;
    $current->next = $newNode;
    return $head;
    }

function SinglyLinkedList7(array $values): ?SinglyLinkedListNode7{
    if(empty($values) && empty($value)){
        return null;
    }

    $head = new SinglyLinkedListNode7($values[0]);
    $current = $head;

    for($i=1; $i<count($values); $i++){
        $current->next = new SinglyLinkedListNode7($values[$i]);
        $current = $current->next;
    }
    return $head;
}

function printLinkedList2(?SinglyLinkedListNode7 $head){
    $current = $head;
    $str = "";
    while($current->next !== null){
        $str .= $current->data . " → ";
        $current = $current->next;
        if($current->next === null){
            $str .= $current->data . " → END";
        }
    }
    $array = explode("→",$str);
    sort($array);
    $newArray = implode("→",$array);
    echo $newArray;
}


echo "問題7".PHP_EOL;
$array = SinglyLinkedList7([2,10,34,45,67,356]);
echo printLinkedList2(insertNodeInSorted($array, 3)).PHP_EOL;

$array = SinglyLinkedList7([2,10,34,45,67,356]);
echo printLinkedList2(insertNodeInSorted($array, 358)).PHP_EOL;

$array = SinglyLinkedList7([2,10,34,45,67,356]);
echo printLinkedList2(insertNodeInSorted($array, -5)).PHP_EOL;

$array = SinglyLinkedList7([4,23,53,56,134,645]);
echo printLinkedList2(insertNodeInSorted($array, 34)).PHP_EOL;

?>



//質問
<?php
class SinglyLinkedListNode8{
    public $data;
    public ?SinglyLinkedListNode8 $next;

    public function __construct($data){
        $this->data = $data;
        $this->next = null;
    }
}

function findMergeNode(?SinglyLinkedListNode8 $headA, ?SinglyLinkedListNode8 $headB): int{
    $currentA = $headA;
    $currentB = $headB;
        while($currentA !== null && $currentB !== null){
            if($currentA->data === $currentB->data){
                return $currentA->data;
            }
            $currentA = $currentA->next;
            $currentB = $currentB->next;
        }
        return -1;
    }

function SinglyLinkedList8(array $values): ?SinglyLinkedListNode8{
    if(empty($values) && empty($value)){
        return null;
    }

    $head = new SinglyLinkedListNode8($values[0]);
    $current = $head;

    for($i=1; $i<count($values); $i++){
        $current->next = new SinglyLinkedListNode8($values[$i]);
        $current = $current->next;
    }
    return $head;
}


echo "問題8".PHP_EOL;
$array1 = SinglyLinkedList8([2,10,34,45,67,356]);
$array2 = SinglyLinkedList8([20,5,34,45,67,356]);
echo findMergeNode($array1, $array2).PHP_EOL;

$array1 = SinglyLinkedList8([34,657,24,36,75,867,345,75,345,64,75]);
$array2 = SinglyLinkedList8([13,4,6,3,345,64,75]);
echo findMergeNode($array1, $array2).PHP_EOL;

$array1 = SinglyLinkedList8([34,657,24,36,75,867,345,75,345,64,75]);
$array2 = SinglyLinkedList8([13,4,6,3,345,64,75,34]);
echo findMergeNode($array1, $array2).PHP_EOL;

?>




<?php
class SinglyLinkedListNode9{
    public $data;
    public ?SinglyLinkedListNode9 $next;

    public function __construct($data){
        $this->data = $data;
        $this->next = null;
    }
}

function reproduceByN(?SinglyLinkedListNode9 $head, int $n){
    $current = $head;
    $str = "";
    if($n === 1){
        while($current->next !== null){
            $str .= $current->data . "→";
            $current = $current->next;
            if($current->next === null){
                $str .= "END";
            }
        }
        echo $str;
    }
    if($n > 1){
        for($i=0; $i<$n; $i++){
            if($i === $n-1){
                $str .= "END";
            }else{
                while($current !== null){
                    $str .= $current->data . " → ";
                    $current = $current->next;
                }
            }
            echo $str;
        }
    }

}

function SinglyLinkedList9(array $values): ?SinglyLinkedListNode9{
    if(empty($values) && empty($value)){
        return null;
    }

    $head = new SinglyLinkedListNode9($values[0]);
    $current = $head;

    for($i=1; $i<count($values); $i++){
        $current->next = new SinglyLinkedListNode9($values[$i]);
        $current = $current->next;
    }
    return $head;
}



echo "問題9".PHP_EOL;
$array = SinglyLinkedList9([2,10,34,45,67,356]);
echo reproduceByN($array, 3).PHP_EOL;

$array = SinglyLinkedList9([20,-5,34,45,67,356]);
echo reproduceByN($array, 4).PHP_EOL;

$array = SinglyLinkedList9([20,-5,34,45,67,356]);
echo reproduceByN($array, 6).PHP_EOL;

$array = SinglyLinkedList9([-8,14,34,45,67,356]);
echo reproduceByN($array, 1).PHP_EOL;

?>