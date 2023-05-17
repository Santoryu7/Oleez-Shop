<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.show', compact('product', 'categories'));
    }


}
