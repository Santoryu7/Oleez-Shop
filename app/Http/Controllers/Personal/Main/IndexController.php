<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $commentsCount = Comment::where('user_id', '=', auth()->user()->id)
            ->count();
        return view('personal.main.index', compact('commentsCount'));
    }


}
