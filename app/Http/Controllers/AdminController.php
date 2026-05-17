<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Order;

class AdminController extends Controller
{

    public function dashboard()
    {

        $totalProducts = Product::count();

        $totalOrders = Order::count();

        $totalUsers = User::count();

        $totalRevenue = Order::sum('total_price');

        $latestOrders = Order::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalProducts',
            'totalOrders',
            'totalUsers',
            'totalRevenue',
            'latestOrders'
        ));
    }
}