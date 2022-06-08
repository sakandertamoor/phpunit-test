<?php
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Mockery\Adepter\PhpUnit\MockeryTestCase;

class ExampleTest extends MockeryTestCase
{

    public function tearDown(): void
    {
        Mockery::close();
    }
    /*
     public function testAddingTwoPlusTwoReultsInFour(){
         $this>self::assertEquals(4, 2+2);
     }
    */
}
