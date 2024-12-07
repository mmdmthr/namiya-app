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
            ->get(route('staff.index'));
        
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
            ->get(route('staff.create'));
        
        $response->assertOk();
        $response->assertViewIs('staff.create');
    }

    public function test_edit_staff_page_is_displayed()
    {
        $user = User::factory()->create();
        $staff = Staff::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get(route('staff.edit', ['staff' => $staff]));
        
        $response->assertOk();
        $response->assertViewIs('staff.edit');
    }

    public function test_view_single_staff_page_is_displayed()
    {
        $user = User::factory()->create();
        $staff = Staff::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get(route('staff.show', ['staff' => $staff]));
        
        $response->assertOk();
        $response->assertViewIs('staff.show');
        $response->assertViewHas('staff', $staff);
        $response->assertSee($staff->name)
                 ->assertSee($staff->birthday)
                 ->assertSee($staff->emergency_contact)
                 ->assertSee($staff->is_active)
                 ->assertSee($staff->hire_date)
                 ->assertSee($staff->address)
                 ->assertSee($staff->is_active);
    }

    public function test_can_create_new_staff()
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->post(
                route('staff.store'),
                [
                    'name' => 'Test Name',
                    'gender' => 'P',
                    'birthday' => '1991-12-31',
                    'phone' => '0899000000',
                    'email' => 'test@example.com',
                    'address' => 'Test Address',
                    'hire_date' => '2022-12-31',
                    'emergency_contact' => '098899000',
                    'role_id' => 'AA',
                    'is_active' => true,
                ]
            );
        
        $response->assertRedirectToRoute('staff.index');
    }

    public function test_can_update_staff()
    {
        $user = User::factory()->create();
        $staff = Staff::factory()->create();

        $response = $this
            ->actingAs($user)
            ->patch(
                route('staff.update', ['staff' => $staff]),
                [
                    'name' => 'Test Name',
                    'gender' => 'P',
                    'birthday' => '1991-12-31',
                    'phone' => '0899000000',
                    'email' => 'test@example.com',
                    'address' => 'Test Address',
                    'hire_date' => '2022-12-31',
                    'emergency_contact' => '098899000',
                    'role_id' => 'AA',
                    'is_active' => true,
                ]
            );
        
        $response->assertRedirectToRoute('staff.show', ['staff' => $staff]);
    }

    public function test_can_delete_staff()
    {
        $user = User::factory()->create();
        $staff = Staff::factory()->create();

        $response = $this
            ->actingAs($user)
            ->delete(
                route('staff.destroy', ['staff' => $staff])
            );
        
        $response->assertRedirectToRoute('staff.index');
        $this->assertDatabaseMissing('staff', [
            'email' => $staff->email,
        ]);
    }
}
