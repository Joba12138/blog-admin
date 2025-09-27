<?php

namespace App\Admin\Controllers\RenWu;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index(Request $request): Factory|View|Application
    {
        // 简单分页查询
        $customers = Customer::query()
            ->orderByDesc('id')
            ->paginate(10);

        return view('customer.index', compact('customers'));
    }
}
