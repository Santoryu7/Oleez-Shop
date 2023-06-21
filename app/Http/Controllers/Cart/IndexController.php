<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke(Request $request, $id)
    {
        if (Auth::id()) {
            $user = auth()->user();
            $product = Product::find($id);

            $cart = new cart;
            $cart->name = $user->name;
            $cart->product_title = $product->title;
            $cart->quantity = $request->quantity;
            $cart->price = $product->price;
            $cart->save();

            return redirect()->back();
        } else {
            return redirect('login');
        }
    }
}
