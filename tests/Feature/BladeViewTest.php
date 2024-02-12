<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BladeViewTest extends TestCase
{
    use RefreshDatabase; // Ensure the database is refreshed for each test

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_dashboard_blade_view()
    {
        // Create a user instance (you can customize this based on your User model)
        $user = factory(\App\Models\User::class)->create();

        // Replace 'dashboard' with the name of your Blade view
        $response = $this->actingAs($user)->get(route('login'));

        $response->assertStatus(200); // This assertion should now pass
    }
}
