<?php

class Queue
{
    protected $items= [];

    public function push ($items){
        $this->items[] = $items;
    }
    public function pop (){
        return array_pop($this->items);
    }
    public function getCount (){
        return count($this->items);
    }
}