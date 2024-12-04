<?php

namespace Tests\Feature;

use App\Models\Staff;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StaffTest extends TestCase
{
    Use RefreshDatabase;

    public function test_view_all_staff_page_is_displayed()
    {
        $user = User::factory()->create();
        $staffs = Staff::factory()->count(1)->create();

        $response = $this
            ->actingAs($user)
            ->get('/staff');
        
        $response->assertOk();
        $response->assertViewIs('staff.index');
        $response->assertViewHas('staffs', $staffs);

        $staff = $staffs->first();
        $response->assertSee($staff->name)
        ->assertSee($staff->hireDate)
        ->assertSee($staff->isActive);
    }

    public function test_create_new_staff_page_is_displayed()
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/staff/create');
        
        $response->assertOk();
    }

    public function test_edit_staff_page_is_displayed()
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get("/staff/$user->id/edit");
        
        $response->assertOk();
    }

    public function test_view_single_staff_page_is_displayed()
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get("/staff/$user->id");
        
        $response->assertOk();
    }
}
