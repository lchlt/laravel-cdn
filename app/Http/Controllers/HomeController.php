<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        $bestCategories = Category::limit(16)->get();
        $bestProducts = Product::limit(16)->get();
        $posts = Post::get();
        return view('welcome', compact('bestCategories', 'bestProducts', 'posts'));
    }
}
