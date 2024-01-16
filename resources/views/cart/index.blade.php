@extends('layouts.app')

@section('content')
    <h2>Shopping Cart</h2>

    @if (count($cartItems) > 0)
        <ul>
            @foreach ($cartItems as $cartItem)
                <li>
                    {{ $cartItem->item->name }} -
                    Quantity: {{ $cartItem->quantity }} -
                    Price: ${{ $cartItem->item->price * $cartItem->quantity }}
                </li>
            @endforeach
        </ul>
    @else
        <p>Your cart is empty.</p>
    @endif
@endsection