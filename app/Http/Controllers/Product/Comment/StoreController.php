<?php

namespace App\Http\Controllers\Product\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Product $product, StoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        $data['product_id'] = $product->id;

        Comment::create($data);

        return redirect()->route('product.show', $product->id);
    }


}
