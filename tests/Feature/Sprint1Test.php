<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class Sprint1Test extends TestCase
{
    use RefreshDatabase;

    /**
     * Test public page is accessible.
     */
    public function test_public_page_is_accessible(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Rongdhonu Coaching Center');
    }

    /**
     * Test admin routes are protected.
     */
    public function test_admin_routes_are_protected(): void
    {
        $response = $this->get('/admin/home');
        // Unauthenticated user is redirected to login
        $response->assertRedirect('/login');
    }

    /**
     * Test authenticated admin can access dashboard.
     */
    public function test_authenticated_admin_can_access_dashboard(): void
    {
        $admin = User::factory()->create([
            'email' => 'admin@rongdhonu.edu',
            'password' => bcrypt('password'),
        ]);

        $response = $this->actingAs($admin)->get('/admin/home');
        
        $response->assertStatus(200);
        $response->assertSee('Admin Dashboard');
        $response->assertSee('Teachers');
        $response->assertSee('Courses');
    }
}
