<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight text-center">
            {{ __('Product Details') }}
        </h2>
    </x-slot>

    <div class="container mx-auto my-12 p-8 bg-pink-100 shadow-2xl rounded-2xl max-w-3xl">
        <div class="flex flex-col items-center text-center">
            <img src="{{ $product->image }}" alt="{{ $product->name }}" 
                 class="w-80 h-auto rounded-xl shadow-lg mb-6 transition-transform transform hover:scale-105">

            <h2 class="text-3xl font-extrabold text-pink-700 mb-2">{{ $product->name }}</h2>
            <p class="text-gray-700 text-lg leading-relaxed max-w-xl">{{ $product->description }}</p>
            <h4 class="text-2xl font-bold text-pink-500 mt-4">Price: ${{ number_format($product->price, 2) }}</h4> 

            <!-- Back to Products Button (Detects Previous Page) -->
            <a href="{{ url()->previous() }}" 
               class="mt-6 bg-pink-500 hover:bg-pink-700 text-white px-6 py-3 rounded-lg shadow-lg">
                Back to Products
            </a>
        </div>
    </div>
</x-app-layout>
