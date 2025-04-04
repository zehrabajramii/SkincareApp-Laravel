<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight text-center bg-pink-500 py-4 rounded-md">
            {{ __('Add New Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-pink-50 overflow-hidden shadow-lg sm:rounded-lg p-8">
                <h2 class="text-center mb-4 text-pink-700 font-extrabold text-2xl">Add New Product</h2>
                
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="form-label text-pink-700 font-bold">Product Name</label>
                        <input type="text" class="form-control border-2 border-pink-300 rounded-lg p-2 w-full" id="name" name="name" required>
                    </div>
                    <div class="mb-4">
                        <label for="description" class="form-label text-pink-700 font-bold">Description</label>
                        <textarea class="form-control border-2 border-pink-300 rounded-lg p-2 w-full" id="description" name="description" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="price" class="form-label text-pink-700 font-bold">Price</label>
                        <input type="number" step="0.01" class="form-control border-2 border-pink-300 rounded-lg p-2 w-full" id="price" name="price" required>
                    </div>
                    <div class="mb-4">
                        <label for="image" class="form-label text-pink-700 font-bold">Image URL</label>
                        <input type="text" class="form-control border-2 border-pink-300 rounded-lg p-2 w-full" id="image" name="image" required>
                    </div>
                    <div class="text-center mt-6">
                        <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded-lg shadow-md">
                            Add Product
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
