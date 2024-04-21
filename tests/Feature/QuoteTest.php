<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Http;

class QuoteTest extends TestCase
{
    /**
     * A basic feature quotes test.
     */
    public function test_quotes(): void
    {
        $response = $this->json('GET', 'api/avrillo/quotes', [
            'api_token' => 'p2lbgWkFrykA4QyUmpHihzmc5BNzIABq'
        ]);
        $this->assertJson($response->getContent());
        //$this->assertIsArray(json_decode($response->getContent(), true));
    
        $response->assertStatus(200);
    }

    /**
     * A basic feature refresh quotes test.
     */
    public function test_refresh_quotes(): void
    {
        $response = $this->json('GET', 'api/avrillo/refresh-quotes', [
            'api_token' => 'p2lbgWkFrykA4QyUmpHihzmc5BNzIABq'
        ]);
        $this->assertJson($response->getContent());
        $response->assertStatus(200);
    }

}
