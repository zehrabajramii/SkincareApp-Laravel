<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    // **Admin Dashboard: Manage Products**
    public function index()
    {
        $products = Product::all();
        return view('admin.dashboard', compact('products'));
    }

    // **User Dashboard: View Products Only**
    public function userIndex()
    {
        $products = Product::all();
        return view('dashboard', compact('products'));
    }

    // **Admin: Create Product**
    public function create()
    {
        return view('products.create');
    }

    // **Admin: Store Product**
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|string',
        ]);

        Product::create($validatedData); //adds product in DB

        return redirect()->route('admin.dashboard')->with('success', 'Product created successfully!');
    }

    // **Show Product Details (For Everyone)**
    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('dashboard')->with('error', 'Product not found.');
        }

        return view('products.show', compact('product'));
    }

    // **Admin: Edit Product**
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    // **Admin: Update Product**
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|string',
        ]);

        $product = Product::findOrFail($id);
        $product->update($validatedData);

        return redirect()->route('admin.dashboard')->with('success', 'Product updated successfully!');
    }

    // **Admin: Delete Product**
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Product deleted successfully!');
    }
}
