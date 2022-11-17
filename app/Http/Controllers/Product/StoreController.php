<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $tags = $data['tags'];
        $colors = $data['colors'];
        unset($data['tags']);
        unset($data['colors']);
        $data['preview_image'] = Storage::put('/images', $data['preview_image']);
        $product = Product::create($data);
        $product->tags()->attach($tags);
        $product->colors()->attach($colors);
        return redirect()->route('products.index');
    }
}
