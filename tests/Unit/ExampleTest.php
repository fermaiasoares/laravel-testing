<?php

namespace Tests\Unit;

use App\User;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testUserCreation()
    {
        $user = new User();
        $user->name = "Test User";
        $user->email = "test@mail.com";
        $user->password = 123456;

        $this->assertEquals('Test User', $user->name);
    }
}
