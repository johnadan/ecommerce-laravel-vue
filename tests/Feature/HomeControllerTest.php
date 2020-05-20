<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $this->assertTrue(true);
    // }
    public function test_add()
    {
        $num1 = 2;
        $num2 = 3;
        $sum = \App\Http\Controllers\HomeController::add($num1, $num2);
        $this->assertEquals(5, $sum);
    }
}
