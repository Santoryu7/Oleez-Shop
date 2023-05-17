<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }


}
