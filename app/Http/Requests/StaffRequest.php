<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'gender' => 'required|string|in:L,P',
            'birthday' => 'required|date',
            'phone' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'hire_date' => 'required|date',
            'emergency_contact' => 'required|string',
            'role_id' => 'required|string|in:APJ,APING,AA,IN',
            'is_active' => 'required|boolean',
        ];
    }
}
