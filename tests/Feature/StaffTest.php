<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StaffTest extends TestCase
{
    Use RefreshDatabase;

    public function test_staff_page_is_displayed()
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/staff');
        
        $response->assertOk();
    }
}
