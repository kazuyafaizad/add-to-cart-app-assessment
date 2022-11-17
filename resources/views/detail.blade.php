<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <form action={{ route('cart.add',$product->id )}} method="post">
            @csrf
            <p>{{ $product->name }}</p>
            <p>{{ $product->price}}</p>
            <p>{{ $product->description}}</p>

            <button class="bg-red-500"> Add to cart</button>


        </form>
    </div>
</x-app-layout>
