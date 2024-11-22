<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ManageBrandsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_creates_a_new_brand()
    {
        $data = [
            'brand_name' => 'Test Brand',
            'brand_image' => 'https://example.com/logo.png',
            'rating' => 5,
            'country' => 'US',
        ];

        $response = $this->post(route('brands.store'), $data);

        $response->assertRedirect(route('brands.index'));
        $this->assertDatabaseHas('brands', $data);
    }

}
