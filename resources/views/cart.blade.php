<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @foreach($carts as $cart)
            <p>{{ $cart->name }}</p>
            <p>{{ $cart->price}}</p>
            <p>{{ $cart->description}}</p>
        @endforeach
        <form method="post" action={{route('cart.checkout')}}>
            @csrf
            <button class="bg-red-500"> Checkout</button>
    </form>
    </div>

</x-app-layout>
