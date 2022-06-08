<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnFullName(){
        $user = new User;
        $user->first_name = "Sakander";
        $user->surname = "Tamoor";
        $this->assertEquals('Sakander Tamoor', $user->getFullName());
    }
    public function testFullNameIsEmptyByDefault(){
        $user = new User;
        $this->assertEquals('', $user->getFullName());
    }
    public function testNotificationIsSent(){
        $user = new User;
        $mock_mailer = $this->createMock(Mailer::class);
        $user->setMailer($mock_mailer);
        $mock_mailer->expects($this->once())
                ->method('sendMessage')
                ->with($this->equalTo('sakander.tamoor@example.com'), $this->equalTo('hello'))
                ->willReturn(true);
        $user->email = 'sakander.tamoor@example.com';
        $this->assertTrue( $user->notify("hello"));
    }
    public function testCannotNotifyUserWithNoEmail(){
        $user = new User;
        $mock_mailer = $this->getMockBuilder(Mailer::class)
                            ->setMethods(null)
                            ->getMock();
        $user->setMailer($mock_mailer);
        $this->expectException(Exception::class);
        $user->notify("hello");
    }



}