<?php

use PHPUnit\Framework\TestCase;
require 'functions.php';
class FunctionTest extends TestCase
{
    public function testAddReturnsTheCorrectSum()
    {

        $this->assertEquals(4, add(2,2));
        $this->assertEquals(8, add(5,3));
    }
    public function testAddDoesNotReturnsTheCorrectSum()
    {
        $this->assertNotEquals(5, add(2,2));
    }

}