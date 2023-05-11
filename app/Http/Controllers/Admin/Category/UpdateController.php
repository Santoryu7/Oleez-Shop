<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(StoreRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        view('admin.categories.edit', compact('category'));
        return redirect()->route('admin.category.index');
    }


}
