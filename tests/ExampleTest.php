<?php
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testAddingTwoPlusTwoReultsInFour(){
        $this>self::assertEquals(4, 2+2);
    }
}
