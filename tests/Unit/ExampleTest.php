<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_some_random()
    {
        $user = new User();
        $user->name = 'abc';
        $user->email = 'abc@me.com';
        $user->password = 'xyz';
        $savedUser = $user->save();
        
        $this->assertTrue($savedUser);
    }
}
