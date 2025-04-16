<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy("created_at", "desc")->paginate(10);
        return view('order-list', compact('orders'));
    }

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
