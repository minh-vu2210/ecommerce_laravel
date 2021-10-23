@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Cart</h1>
        <div class="row mt-5">
            @foreach ($products as $product)
                <div class="product-img col-lg-4 col-md-12 col-12 mb-5">
                    <img src="{{ $product->gallery }}" alt="" class="img-fluid w-30">
                    <div class="small-img-group"></div>
                </div>
                <div class="col-lg-8 col-md-12 col-12">
                    <h5>{{ $product->name }}</h5>
                    <h5 class="text-success">${{ $product->price }}</h5>
                    <form action="/removeProduct" class="me-3" method="POST">
                        @csrf
                        <input type="hidden" name="product_cart_id" value="{{ $product->cart_id }}">
                        <button class="btn btn-danger">Remove</button>
                    </form>

                </div>

            @endforeach

        </div>
        <div class="row pt-4 flex-row-reverse total-price">
            @if (count($products) > 0)


                <div class="col">
                    <h3 class="text-success">Total: ${{ $totalPrice }}</h3>
                    <a class="btn btn-primary" href="/checkout">Checkout</a>

                </div>


            @else
                <div class="col">
                    <h3 class="text-danger">Your cart is currently empty. Please add some products</h3>
                </div>
        </div>



        @endif

    </div>


@endsection
