<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;

class JoinController extends Controller
{
    public function index()
    {
        $orders = Orders::select(
            "orders.id",
            "orders.qtr",
            "orders.order_data_time",
            "products.id as product_id"
        )
            ->join("products", "products.id", "=", "orders.product_id")
            ->get(['orders.id', 'orders.product_id', 'orders.qtr'])
            ->toArray();
        return view('join_table', compact('orders'));
        //($orders);
    }
}
