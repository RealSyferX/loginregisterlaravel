<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(['product_name', 'price', 'quantity', 'product_img']);
        return view('shop', ['products' => $products]);
    }

    public function create()
    {
        return view('add_product');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'product_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'product_img' => 'required|image|max:2048',
        ]);

        // Store the uploaded image in the 'public' disk (usually 'storage/app/public')
        $imagePath = $request->file('product_img')->store('product_images', 'public');

        // Create a new product record in the database
        Product::create([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'product_img' => $imagePath,
        ]);

        // Redirect to the shop page with a success message
        return redirect()->route('shopX')->with('message', 'Product added successfully!');
    }
}
