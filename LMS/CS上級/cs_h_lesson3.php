<?php
class Node
{
    public $data;
    public $next;

    public function __construct($data){
        $this->data = $data;
    }
}

class Stack
{
    public $head;

    public function push($data){
        $temp = $this->head;
        $this->head = new Node($data);
        $this->head->next = $temp;
    }

    public function pop(){
        if($this->head == null) return null;
        $temp = $this->head;
        $this->head = $this->head->next;
        return $temp->data;
    }

    public function peek(){
        if($this->head == null)return null;
        return $this->head->data;
    }
}

$s = new Stack();
$s->push(2);
echo $s->peek().PHP_EOL;

$s->push(4);
$s->push(3);
$s->push(1);
$s->pop();
echo $s->peek() .PHP_EOL;

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

class Stack2
{
    public $head;

    public function push($data){
        $temp = $this->head;
        $this->head = new Node2($data);
        $this->head->next = $temp;
    }

    public function pop(){
        if($this->head == null) return null;
        $temp = $this->head;
        $this->head = $this->head->next;
        return $temp->data;
    }

    public function peek(){
        if($this->head == null)return null;
        return $this->head->data;
    }
}

function consecutiveWalk($arr){
    $stack = new Stack2();
    $stack->push($arr[0]);
    for($i=1; $i<count($arr); $i++){
        if($stack->peek() < $arr[$i]){
            while($stack->pop() != null);
        }
        $stack->push($arr[$i]);
    }
    $results = [];

    while($stack->peek() != null) array_unshift($results, $stack->pop());

    return $results;
}

print(json_encode(consecutiveWalk([3,4,20,45,56,6,4,3,5,3,2]))) .PHP_EOL; ///[5,3,2]
print(json_encode(consecutiveWalk([4,5,4,2,4,3646,34,64,3,0,-34,-54]))) .PHP_EOL; //[64,3,0,-34,-54]
print(json_encode(consecutiveWalk([4,5,4,2,4,3646,34,64,3,0,-34,-54,4]))) .PHP_EOL; //[4]

?>



<?php
//キューの最初の要素をキューの先頭と呼び、最後の要素をキューの末尾と呼ぶ
class Node3
{
    public $data;
    public $next;

    public function __construct($data){
        $this->data = $data;
    }
}

class Queue
{
    public $head;
    public $tail;

    public function peekFront(){
        if($this->head === null) return null;
        return $this->head->data;
    }

    public function peekBack(){
        if($this->tail === null) return $this->peekFront();
        return $this->tail->data;
    }

    public function enqueue($data){
        if($this->head === null){
            $this->head = new Node3($data);
            $this->tail = $this->head;
        }
        else{
            $this->tail->next = new Node3($data);
            $this->tail = $this->tail->next;
        }
    }

    public function dequeue(){
        if($this->head === null) return null;
        $temp = $this->head;
        $this->head = $this->head->next;
        if($this->head === null) $this->tail = null;

        return $temp->data;
    }
}

$q = new Queue();
echo json_encode($q->peekFront()) .PHP_EOL;
echo json_encode($q->peekBack()) .PHP_EOL;

$q->enqueue(4);
echo json_encode($q->peekFront()) .PHP_EOL;
echo json_encode($q->peekBack()) .PHP_EOL;

$q->enqueue(50);
echo json_encode($q->peekFront()) .PHP_EOL;
echo json_encode($q->peekBack()) .PHP_EOL;

$q->enqueue(64);
echo json_encode($q->peekFront()) .PHP_EOL;
echo json_encode($q->peekBack()) .PHP_EOL;

$q->enqueue("dequeued:" .$q->dequeue()) .PHP_EOL;
echo json_encode($q->peekFront()) .PHP_EOL;
echo json_encode($q->peekBack()) .PHP_EOL;

?>



<?php
//キューの最初の要素をキューの先頭と呼び、最後の要素をキューの末尾と呼ぶ
class Node4
{
    public $data;
    public $next;
    public $prev;

    public function __construct($data){
        $this->data = $data;
    }
}

class Deque
{
    public $head;
    public $tail;

    public function peekFront(){
        if($this->head === null) return null;
        return $this->head->data;
    }

    public function peekBack(){
        if($this->tail === null) return $this->peekFront();
        return $this->tail->data;
    }

    public function enqueueFront($data){
        if($this->head === null){
            $this->head = new Node4($data);
            $this->tail = $this->head;
        }
        else{
            $this->head->prev = new Node4($data);
            $this->head->prev->next = $this->head;
            $this->head = $this->head->prev;
        }
    }

    public function enqueueBack($data){
        if($this->head === null){
            $this->head = new Node4($data);
            $this->tail = $this->head;
        }
        else{
            $this->tail->next = new Node4($data);
            $this->tail->next->prev = $this->tail;
            $this->tail = $this->tail->next;
        }
    }

    public function dequeueFront(){
        if($this->head === null) return null;

        $temp = $this->head;
        $this->head = $this->head->next;
        if($this->head === null) $this->tail = null;
        else $this->head->prev = null;
        return $temp->data;
    }

    public function dequeueBack(){
        if($this->tail === null) return null;

        $temp = $this->tail;
        $this->tail = $this->tail->prev;

        if($this->tail === null) $this->head = null;
        else $this->tail->next = null;
        return $temp->data;
    }
}

function getMax($arr){
    $deque = new Deque();
    $deque->enqueueFront($arr[0]);

    for($i=1; $i<count($arr); $i++){
        if($arr[$i]>$deque->peekFront()) $deque->enqueueFront($arr[$i]);
        else $deque->enqueueBack($arr[$i]);
    }

    return $deque->peekFront();
}

echo getMax([34,35,65,34,10,2,14,5,353,23,35,63,23]).PHP_EOL;


?>




<?php
//キューの最初の要素をキューの先頭と呼び、最後の要素をキューの末尾と呼ぶ
class Node5
{
    public $data;
    public $next;
    public $prev;

    public function __construct($data){
        $this->data = $data;
    }
}

class Deque2
{
    public $head;
    public $tail;

    //先頭の値を返す
    public function peekFront(){
        if($this->head === null) return null;
        return $this->head->data;
    }

    //最後尾の値を返す
    public function peekBack(){
        if($this->tail === null) return $this->peekFront();
        return $this->tail->data;
    }

    //先頭に値を加える
    public function enqueueFront($data){
        if($this->head === null){
            $this->head = new Node5($data);
            $this->tail = $this->head;
        }
        else{
            $this->head->prev = new Node5($data);
            $this->head->prev->next = $this->head;
            $this->head = $this->head->prev;
        }
    }

    //最後尾に値を加える
    public function enqueueBack($data){
        if($this->head === null){
            $this->head = new Node5($data);
            $this->tail = $this->head;
        }
        else{
            $this->tail->next = new Node5($data);
            $this->tail->next->prev = $this->tail;
            $this->tail = $this->tail->next;
        }
    }

    //先頭の値を消す
    public function dequeueFront(){
        if($this->head === null) return null;

        $temp = $this->head;
        $this->head = $this->head->next;
        if($this->head === null) $this->tail = null;
        else $this->head->prev = null;
        return $temp->data;
    }


    //最後尾の値を消す
    public function dequeueBack(){
        if($this->tail === null) return null;

        $temp = $this->tail;
        $this->tail = $this->tail->prev;

        if($this->tail === null) $this->head = null;
        else $this->tail->next = null;
        return $temp->data;
    }
}

function getMaxWindows($arr,$k){
    $deque = [];
    $result = [];

    for($i=1; $i<$k; $i++){
        while(!empty($deque) && $arr[$deque[count($deque)-1]] <= $arr[$i]){
            array_pop($deque);
        }
        $deque[] = $i;
    }

    for($i=$k; $i<count($arr); $i++){
        $result[] = $arr[$deque[0]];
        if($deque[0] <= $i-$k){
            array_shift($deque);
        }

        while(!empty($deque) && $arr[$deque[count($deque)-1]] <= $arr[$i]){
            array_pop($deque);
        }
        $deque[] = $i;
    }

    $result[] = $arr[$deque[0]];

    return $result;

}

$result = getMaxWindows([34,35,64,34,10,2,14,5,353,23,35,63,23],4);
print_r($result);
echo implode(",",$result);


?>