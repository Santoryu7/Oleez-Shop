<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Product $product)
    {
        $categories = Category::all();
        //dd($product);
        return view('admin.products.edit', compact('product', 'categories'));
    }


}
