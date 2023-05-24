<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['userCount'] = User::all()->count();
        $data['productsCount'] = Product::all()->count();
        $data['categoriesCount'] = Category::all()->count();
        return view('admin.main.index', compact('data'));
    }


}
