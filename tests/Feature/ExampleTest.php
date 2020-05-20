<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

//use Illuminate\Foundation\Testing\WithoutMiddleware;

//use Tests\Feature\BaseTestCase;

//use Tests\CreatesApplication;
//use Laravel\BrowserKitTesting\TestCase as BaseTestCase;

//use Tests\DuskTestCase as BaseTestCase;

class ExampleTest extends BaseTestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function testBasicTest()
    // {
    //     $response = $this->get('/')
    //     //->see('Big Store');
    //     ->see('Welcome to the bigStore');

    //     $response->assertStatus(200);
    // }
    public function testBasicExample()
    {
        $this->visit('/pageone')
            ->click('Page Two')
            ->see('This is page two')
            ->seePageIs('/pagetwo');
    }

}
