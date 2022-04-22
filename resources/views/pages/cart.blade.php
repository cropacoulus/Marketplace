@extends('layouts.app')

@section('title')
    Store Cart Page
@endsection

@section('content')
    <div class="page-content page-cart">
        <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!--- Breadcrumbs -->
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Cart
                                </li>
                            </ol>
                        </nav>
                        <!--- End Breadcrumbs -->
                    </div>
                </div>
            </div>
        </section>

        <section class="store-cart">
            <div class="container">
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-md-8 col-lg-8 table-responsive">
                        <table class="table table-borderless table-cart">
                            <thead>
                                <tr>
                                    <td>Image</td>
                                    <td>Name &amp; Seller</td>
                                    <td>Quantity</td>
                                    <td>Price</td>
                                    <td>Menu</td>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $totalPrice = 0;
                                    $tax = 0;
                                @endphp
                                @forelse ($carts as $cart)
                                    <tr>
                                        <td style="width: 25%;">
                                            @if ($cart->product->galleries)
                                                <img src="{{ Storage::url($cart->product->galleries->first()->photos) }}" class="cart-image w-100" alt="">
                                            @endif
                                        </td>
                                        <td style="width: 35%;">
                                            <div class="product-title">{{ $cart->product->name }}</div>
                                            <div class="product-subtitle">by {{ $cart->product->user->store_name }}</div>
                                        </td>
                                        <td style="width: 15%">
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <form action="{{ route('cart-decrement', $cart->id) }}" method="post">
                                                        @csrf
                                                        <button id="decrementQty" class="btn btn-link px-2 decrementQty" type="submit">
                                                            <img src="{{ asset('images/dash.svg') }}" alt="">
                                                        </button>
                                                    </form>
                                                    
                                                    <input type="text" id="quantity" class="form-control quantity" value="{{ $cart->quantity }}">
                                                    <form action="{{ route('cart-increment', $cart->id) }}" method="post">
                                                        @csrf
                                                        <button id="incrementQty" class="btn btn-link px-2 incrementQty" type="submit">
                                                            <img src="{{ asset('images/plus.svg') }}" alt="">
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width: 35%;">
                                            <div class="product-title">Rp {{ number_format($cart->product->price) }}</div>
                                            <div class="product-subtitle">Rupiah</div>
                                        </td>
                                        <td style="width: 20%;">
                                            <form action="{{ route('cart-delete', $cart->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-remove-cart">
                                                    Remove
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @php
                                        $totalPrice += $cart->product->price * $cart->quantity;
                                        $tax = $totalPrice * (10/100);
                                    @endphp
                                @empty
                                    <tr>
                                        <td colspan="5" class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                                            <strong>Your cart is empty</strong>
                                        </td>
                                    </tr>
                                @endforelse
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="card mb-4">
                            <div class="card-header py-3">
                                <h5 class="mb-0">Summary</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    @foreach ($carts as $cart)
                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                            {{ $cart->product->name }} 
                                            <span>Rp {{ number_format($cart->product->price * $cart->quantity) }}</span>
                                        </li>
                                    @endforeach
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0 pb-0">
                                        Sub Total
                                        <span>Rp {{ number_format($totalPrice) }}</span>
                                    </li>
                                    @if ($carts->count() > 0)
                                        <li class="list-group-item d-flex justify-content-between align-items-center px-0 pb-0">
                                            Tax
                                            <span>Rp {{ number_format($tax) }}</span>
                                        </li>
                                    @endif
                                    @php
                                        $totalPrice += $tax;
                                    @endphp
                                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                        <div>
                                            <strong>Total</strong>
                                        </div>
                                        <span><strong>Rp {{ number_format($totalPrice ?? 0) }}</strong></span>
                                    </li>
                                </ul>

                                <a href="{{ route('checkout') }}" type="button" class="btn btn-success text-white btn-md btn-block">
                                    Go to checkout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection