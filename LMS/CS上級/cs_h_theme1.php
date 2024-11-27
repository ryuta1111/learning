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
    if($head->next !=null) $count++;
    return $count;
}

linkedListLength(SinglyLinkedList([3,2,1,5,6,4]));