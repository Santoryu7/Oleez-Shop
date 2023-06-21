<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();

        $product = Product::all();

        $property = Cart::where('name', '=', $user->name)->get();
        return view('cart.index', compact('property', 'product'));
    }
}
