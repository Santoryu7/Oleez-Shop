<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Product $product)
    {
        $category = Category::where('id', '=', $product->category_id)->get();
        $date = Carbon::parse($product->created_at);
        $comments = Comment::where('product_id', $product->id)
            ->get();
//            ->take(100);
//        dd($date);
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->get()
            ->take(3);
        return view('product.show', compact('product', 'relatedProducts', 'comments', 'date', 'category'));
    }


}
