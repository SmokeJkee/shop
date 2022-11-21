<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $colors = Color::all();
        $tags = Tag::all();
        $categories = Category::all();
        $products = Product::all();
        return view('product.create', compact('products', 'categories', 'tags', 'colors'));
    }
}
