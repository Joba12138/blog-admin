<?php

namespace App\Http\Controllers\RenWu;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'nullable|string|max:50',
            'last_name' => 'nullable|string|max:50',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'demand' => 'nullable|string',
        ]);

        return Customer::query()->firstOrCreate(
            ['email' => $validated['email']], // 唯一条件
            $validated
        );
    }
}
