<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight text-center bg-pink-500 py-4 rounded-md">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <div class="container mx-auto my-12 p-6 bg-pink-100 shadow-lg rounded-lg max-w-3xl">
        <h2 class="text-center text-2xl font-bold text-pink-700 mb-6">Edit Product</h2>
        
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Product Image Preview -->
            <div class="flex justify-center mb-4">
                <img id="imagePreview" src="{{ $product->image }}" 
                     class="w-40 h-40 object-cover rounded-lg shadow-md border-2 border-pink-300">
            </div>

            <div class="mb-3">
                <label for="name" class="block font-bold text-pink-700">Product Name</label>
                <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" 
                       class="form-control w-full px-4 py-2 border rounded-lg shadow-sm" required>
            </div>

            <div class="mb-3">
                <label for="description" class="block font-bold text-pink-700">Description</label>
                <textarea id="description" name="description" rows="3"
                          class="form-control w-full px-4 py-2 border rounded-lg shadow-sm" required>{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="block font-bold text-pink-700">Price</label>
                <input type="text" id="price" name="price" 
                       value="{{ old('price', number_format($product->price, 2, '.', '')) }}"
                       class="form-control w-full px-4 py-2 border rounded-lg shadow-sm" required>
            </div>

            <div class="mb-3">
                <label for="image" class="block font-bold text-pink-700">Image URL</label>
                <input type="text" id="image" name="image" value="{{ old('image', $product->image) }}" 
                       class="form-control w-full px-4 py-2 border rounded-lg shadow-sm" required>
            </div>

            <div class="text-center mt-6">
                <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-2 rounded-lg shadow-md">
                    Update Product
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
