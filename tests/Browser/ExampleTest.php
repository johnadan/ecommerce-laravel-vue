<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/pageone')
                    ->resize(1366, 768)
                    ->click('Page Two')
                    ->see('This is page two')
                    //->assertSee('This is page two')
                    ->seePageIs('/pagetwo');
                    //->assertSee('Laravel');
        });
    }

    // public function testBasicExample()
    // {
    //     $this->visit('/pageone')
    //         ->click('Page Two')
    //         ->see('This is page two')
    //         ->seePageIs('/pagetwo');
    // }

}
