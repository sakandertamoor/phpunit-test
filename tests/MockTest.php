<?php
use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
    public function testMock(){

        $mock = $this->createMock(Mailer::class);
        $mock->method('sendMessage')->willReturn(true);
        $result = $mock->sendMessage('sakander.tamoor@example.com', 'Hello');
        $this->assertTrue($result);
    }
}