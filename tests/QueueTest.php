<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    protected $queue;
    protected function setUp(): void
    {
       $this->queue = new Queue();
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

}
