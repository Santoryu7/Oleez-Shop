<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();

        $product = Product::all();
        if (Auth::id()) {
            $property = Cart::where('name', '=', $user->name)->get();
        } else {
            return redirect('login');
        }
        return view('cart.index', compact('property', 'product'));
    }
}
