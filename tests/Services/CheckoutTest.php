<?php

namespace Tests\Services;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Services\Checkout;

class CheckoutTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function testBasicTest()
    // {
    //     $this->assertTrue(true);
    // }

    protected $checkout;

    public function setup()
    {
    	$this->checkout = new Checkout();
    }

    /**
    *Test to check if the order total is calculated correctly for given payment method
    *
    * @param string $paymentMethod
    * @param float $expectedTotal
    *
    * @dataProvider paymentMethodProvider
    */

    public function testCalculator($paymentMethod, $expectedTotal)
    {
    	$this->assertEquals(
    		$this->checkout->calculateTotal($paymentMethod),
    		$expectedTotal,
    		sprintf('Testing total calculation for %s.', $paymentMethod)
    	);
    }

}