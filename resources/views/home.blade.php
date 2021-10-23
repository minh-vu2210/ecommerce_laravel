@extends('layouts.app')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://cdn3.centrecom.com.au/images/upload/0108811_0.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/slider-2.jpeg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/slider-3.jpeg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <div class="container mt-4 d-flex mb-5">

        <div class="row">
            <h2>Popular</h2>
            @foreach ($products as $product)

                <div class="col-md-4 mt-4">
                    <a href="detail/{{ $product->id }}">
                        <div class="card">
                            <img src="{{ $product->gallery }}" class="card-img-top w-100">
                            <div class="card-body">
                                <h3 class="card-title">{{ $product->name }}</h3>
                                <div class="d-flex justify-content-between">

                                    <p class="card-text mr-4 text-success">${{ $product->price }}</p>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

            @endforeach

        </div>
    </div>



@endsection
