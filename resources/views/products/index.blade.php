@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-4" style="color: #ff4081; font-weight: bold;">All Skincare Products</h1>

    <!-- Add Product Button -->
    <div class="text-center mb-4">
        <a href="{{ route('products.create') }}" class="btn btn-custom" style="background-color: #ff80ab; border-radius: 8px;">
            + Add New Product
        </a>
    </div>

    <!-- Products Grid  loop through all the products-->
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <!-- Product Image -->
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="product-image w-100">

                    <!-- Product Details -->
                    <div class="p-3">
                        <h5 class="fw-bold" style="color: #d81b60;">{{ $product->name }}</h5>
                        <p class="text-muted mb-2">Price: ${{ number_format($product->price, 2) }}</p>

                        <!-- View Details Button -->
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-custom w-100 mb-2" style="background-color: #ff80ab; border-radius: 8px;">
                            View Details
                        </a>

                        <!-- Edit Button -->
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning w-100 mb-2" style="border-radius: 8px;">
                            Edit
                        </a>

                        <!-- Delete Button -->
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-100" style="border-radius: 8px;">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
