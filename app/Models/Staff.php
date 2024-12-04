<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    /** @use HasFactory<\Database\Factories\StaffFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'birthday',
        'gender',
        'email',
        'phone',
        'address',
        'hire_date',
        'role_id',
        'emergency_contact',
        'is_active',
    ];
}
