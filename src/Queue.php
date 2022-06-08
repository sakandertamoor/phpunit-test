<?php

class Queue
{
    protected $items= [];
    public const MAX_ITEMS = 5;

    public function push ($items){
        if ($this->getCount() == static::MAX_ITEMS)
        {
            throw new QueueException("Queue is Full");
        }
        $this->items[] = $items;
    }
    public function pop (){
        return array_shift($this->items);
    }
    public function getCount (){
        return count($this->items);
    }
    public function clear(){
        $this->items =[];
    }
}