<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function getProducts()
    {
        $data = Product::all();

        return response()->json([
            'status' => true,
            'data' => $data
        ]);
    }

    public function updateProduct(Request $request)
    {
        $item = Product::find($request->id);

        $item->update([
            'product_name' => $request->product_name,
            'description' => $request->description,
            'stock' => $request->stock,
            'price' => $request->price
        ]);

        return response()->json([
            'status' => true,
            'message' => 'successfuly updated product'
        ]);
    }
}