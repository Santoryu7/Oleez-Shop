<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\StoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(StoreRequest $request, Product $product)
    {
        $data = $request->validated();
        $product->update($data);
        view('admin.products.edit', compact('product'));
        return redirect()->route('admin.product.index');
    }


}
