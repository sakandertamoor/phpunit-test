<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    protected $queue;

    protected function setUp(): void
    {
        $this->queue = new Queue;
    }

    protected function tearDown(): void
    {
        //unset($this->queue);
    }

    public function testNewQueueIsEmpty(){
        $this>self::assertEquals(0, $this->queue->getCount());
    }

    public function testAnItemIsAddedToTheQueue(){
        $this->queue->push('sakander');
        $this>self::assertEquals(1, $this->queue->getCount());

    }
    public function testAnItemIsRemovedToTheQueue(){
        $this->queue->push('sakander');
        $item = $this->queue->pop();
        $this>self::assertEquals(0, $this->queue->getCount());
        $this>self::assertEquals('sakander', $item);
    }
    public function testAnItemIsRemovedFromTheFrontOfTheQueue(){
        $this->queue->push('first');
        $this->queue->push('second');
        $this>self::assertEquals('first', $this->queue->pop());

    }
    public function testMaxNumberOfItemsCanBeAdded(){
        for($i=0; $i < Queue::MAX_ITEMS ; $i++){
            $this->queue->push($i);
        }
        $this>self::assertEquals(Queue::MAX_ITEMS, $this->queue->getCount());
    }
    public function testExpectionThrownWhenAddingAnItemToAFullQueue(){
        for($i=0; $i < Queue::MAX_ITEMS ; $i++){
            $this->queue->push($i);
        }
        $this->expectException(QueueException::class);
        $this->queue->push("Wafer thin mint");

    }


}
