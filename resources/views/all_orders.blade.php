@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>Welcome back {{ Session::get('user')['name'] }}</h3>
            <h5>All Orders</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Order</th>
                    <th scope="col">Product</th>
                    <th scope="col">Date</th>
                    <th scope="col">Order Status</th>
                    <th scope="col">Total</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <th scope="row">#{{$order->id}}</th>
                        <th> {{$order->name}}</th>
                        <td>{{$order->created_at}}</td>
                        <td>{{$order->status}}</td>
                        <td>${{$order->price}}</td>
                      </tr>
                    @endforeach
                  
                  
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection