<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function admin()
    {
        $orders = Order::orderBy('id', 'desc')->get();
        return view('admin', compact('orders'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function productUser()
    {
        $products = Product::all();
        return view('product-user', compact('products'));
    }
}
