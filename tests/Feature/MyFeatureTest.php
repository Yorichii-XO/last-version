<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MyFeatureTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_page_redirects()
    {
        $response = $this->get('/damancoms');
    
        $response->assertStatus(302) // Assert that it's a redirect     
                 ->assertRedirect(route('login')); // Use the named route for login
    }
    
    
    
}
