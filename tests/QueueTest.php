<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    public function testNewQueueIsEmpty(){
        $queue = new Queue();
        $this>self::assertEquals(0, $queue->getCount());
    }
    public function testAnItemIsAddedToTheQueue(){
        $queue = new Queue();
        $queue->push('sakander');
        $this>self::assertEquals(1, $queue->getCount());
    }
    public function testAnItemIsRemovedToTheQueue(){
        $queue = new Queue();
        $queue->push('sakander');
        $item = $queue->pop();
        $this>self::assertEquals(0, $queue->getCount());
        $this>self::assertEquals('sakander', $item);
    }

}
