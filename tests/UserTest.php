<?php

use PHPUnit\Framework\TestCase;
require 'User.php';
class UserTest extends TestCase
{
    public function testReturnFullName(){
        $user = new User;
        $user->first_name = "Sakander";
        $user->surname = "Tamoor";
        $this->assertEquals('Sakander Tamoor', $user->getFullName());

    }
    public function tesFullNameIsEmptyByDefault(){
        $user = new User;
        $this->assertEquals('', $user->getFullName());

    }



}