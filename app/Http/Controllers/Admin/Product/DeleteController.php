<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.product.index');
    }


}
