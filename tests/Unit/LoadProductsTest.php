<?php

namespace Tests\Unit;

use Tests\TestCase;

class LoadProductsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_load_products(){

        $response = $this->get('/products');

        $response->assertStatus(200);

    }
}
