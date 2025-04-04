<x-app-layout>
    <x-slot name="header">
        <div class="relative bg-pink-500 text-white text-center py-6 shadow-lg rounded-md">
            <h2 class="text-2xl font-bold">All Skincare Products</h2>
        </div>
    </x-slot>

    <div class="py-12 bg-pink-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-pink-100 overflow-hidden shadow-lg sm:rounded-lg p-8">
                
                <!-- Show different messages for logged-in and guest users -->
                @if(Auth::check())
                    <p class="text-center text-lg font-bold text-gray-700">
                        Hello, {{ Auth::user()->name }}! Explore our skincare collection.
                    </p>
                @else
                    <p class="text-center text-lg font-bold text-gray-700">
                        Welcome! Browse our skincare products.
                    </p>
                @endif
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-6">
                    @foreach($products as $product)
                        <div class="bg-white p-6 rounded-2xl shadow-lg transition-transform transform hover:scale-105 hover:shadow-2xl">
                        <img src="{{ $product->image }}" 
                                 alt="{{ $product->name }}" 
                                 class="w-full h-60 object-cover rounded-xl transition-transform transform hover:scale-105 shadow-md">

                            <h5 class="text-xl font-extrabold text-pink-700 text-center mt-4">
                                {{ $product->name }}
                            </h5>
                            <p class="text-gray-600 text-center">
                                Price: ${{ number_format($product->price, 2) }}
                            </p>

                            <!-- view details button -->
                            <a href="{{ url('/products/' . $product->id) }}" 
   class="bg-pink-500 hover:bg-pink-600 text-white px-5 py-3 mt-3 rounded-lg block text-center shadow-md transition-transform transform hover:scale-105">
    View Details
</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
