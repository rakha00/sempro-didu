<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'product_id' => 'required',
            'status' => 'required',
            'quantity' => 'required',
        ]);

        Order::create($request->all());

        return redirect()->route('product-user')->with('success', 'Order created successfully');
    }
}
