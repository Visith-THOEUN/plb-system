<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Carbon;
use App\Sale;
use App\Store;
use App\Product;
use App\User;

class HomeController
{
    public function index()
    {
        $sale = Sale::whereDate('created_at', Carbon::today())->count();
        $product = Product::all()->count();
        $user = User::all()->count();
        $store = Store::all()->count();
        $sale_date = array();
        $sale_data = array();
        for($i = 0; $i < 15; $i++){
             $sale_date[$i] = Carbon::today()->subDays($i)->format('d-M');
             $sale_data[$i] = Sale::whereDate('created_at', Carbon::today()->subDays($i))->count();
        }
        return view('home', compact('sale', 'product', 'user', 'store', 'sale_data', 'sale_date'));
    }
}
