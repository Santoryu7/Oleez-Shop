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

            $properties = Cart::where('name', '=', $user->name)->get();

            if ($properties->all() == []) {
                $cart = new cart;
                $cart->name = $user->name;
                $cart->product_title = $product->title;
                $cart->quantity = $request->quantity;
                $cart->price = $product->price;
                $cart->save();

                return redirect()->back()->with('message', 'Товар добавлен в корзину');
            } else {
                foreach ($properties as $property)
                    if ($product->title == $property->product_title) {
                        $number = $property->quantity;
                        (int)$number += (int)$request->quantity;
                        $property->quantity = (string)$number;
                        $property->save();

                        return redirect()->back()->with('message', 'Товар добавлен в корзину');
                    }
                        $cart = new cart;
                        $cart->name = $user->name;
                        $cart->product_title = $product->title;
                        $cart->quantity = $request->quantity;
                        $cart->price = $product->price;
                        $cart->save();

                        return redirect()->back()->with('message', 'Товар добавлен в корзину');
            }
        } else {
            return redirect('login');
        }
    }
}
