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
            'name' => 'nullable|string|max:100',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'demand' => 'nullable|string',
            'source' => 'nullable|string|max:100',
        ]);

        return Customer::query()->firstOrCreate(
            ['email' => $validated['email']], // 唯一条件
            $validated
        );
    }
}
