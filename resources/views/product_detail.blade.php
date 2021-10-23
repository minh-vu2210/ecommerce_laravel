@extends('layouts.app')

@section('content')

    <div class="container  my-5">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-12 col-12">
                <img src="{{ $product->gallery }}" alt="" class="img-fluid w-100">
                <div class="small-img-group"></div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <h6><a href="/">Home</a>/{{ $product->name }}</h6>
                <h3>{{ $product->name }}</h3>
                <h2 class="my-4">${{ $product->price }}</h2>
                <div class="d-flex">
                    <form action="/add_to_cart" class="me-3"  method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button class="btn btn-primary">Add to cart</button>
                    </form>
                   

                </div>

                <h4 class="mt-5">Product Details</h4>
                <span>{{ $product->description }}</span>
            </div>
        </div>
    </div>

@endsection
