<x-app-layout>
    <x-slot name="header">
        <div class="relative bg-pink-500 text-white text-center py-6 shadow-lg rounded-md">
            <h2 class="text-2xl font-bold">All Skincare Products</h2>
        </div>
    </x-slot>

    <div class="py-12 bg-pink-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-pink-100 overflow-hidden shadow-lg sm:rounded-lg p-8">
                
                <!-- Add Product Button -->
                <div class="text-center mb-8">
    <a href="{{ url('/admin/products/create') }}" 
       class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-3 px-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
        + Add New Product
    </a>
</div>

</a>

                </div>

                <!-- Products Table with Images -->
                <div class="overflow-x-auto">
                    <table class="w-full bg-white shadow-md rounded-lg overflow-hidden">
                        <thead class="bg-pink-500 text-white">
                            <tr>
                                <th class="py-3 px-4 text-left">ID</th>
                                <th class="py-3 px-4 text-left">Image</th>
                                <th class="py-3 px-4 text-left">Product Name</th>
                                <th class="py-3 px-4 text-left">Price</th>
                                <th class="py-3 px-4 text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr class="border-b hover:bg-pink-50">
                                    <td class="py-4 px-4">{{ $product->id }}</td>
                                    <td class="py-4 px-4">
                                        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-16 h-16 rounded-lg shadow-md object-cover">
                                    </td>
                                    <td class="py-4 px-4">{{ $product->name }}</td>
                                    <td class="py-4 px-4">${{ number_format($product->price, 2) }}</td>
                                    <td class="py-4 px-4 flex space-x-2">
                                        <a href="{{ route('products.show', $product->id) }}" 
                                           class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-lg shadow-md">
                                            View
                                        </a>
                                        <a href="{{ route('products.edit', $product->id) }}" 
                                           class="bg-yellow-400 hover:bg-yellow-500 text-black px-4 py-2 rounded-lg shadow-md">
                                            Edit
                                        </a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" 
                                              onsubmit="return confirm('Are you sure you want to delete this product?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded-lg shadow-md">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
