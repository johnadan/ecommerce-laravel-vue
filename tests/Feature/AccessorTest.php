<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\DB;

class AccessorTest extends TestCase
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

    public function testBasicTest()
    {
        // load post manually first
        $db_post = DB::select('select * from lvl_posts where id = 1');
        $db_post_title = ucfirst($db_post[0]->name);
 
        $response = $this->get('/accessor/index?id=1');
 
        $response->assertStatus(200);
        $response->assertSeeText($db_post_title);
    }
    
}
