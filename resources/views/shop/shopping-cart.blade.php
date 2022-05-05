@extends('layouts.master')

@section('title')
    Shopping Cart
@endsection
@section('content')
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Reduce</th>
                            <th scope="col">Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                    @foreach($products as $product)
                        <tr>
                            <th scope="row"></th>
                            <td><img src="{{$product['item']['imagePath']}}"alt="..." class="img-responsive"></td>
                            <td>{{ $product['item']['title'] }}</td>
                            <td>{{ $product['price'] }}</td>
                            <td>{{ $product['qty'] }}</td>
                            <td><button type="button" class="btn btn-primary"><a
                                        href="{{ route('product.reduce', ['id' => $product['item']['id']]) }}">"....."</a><i
                                        class="far fa-trash-alt"></i></button></td>
                            <td><button type="button" class="btn btn-primary"><a
                                        href="{{ route('product.remove', ['id' => $product['item']['id']]) }}">"....."</a><i
                                        class="far fa-trash-alt"></i></button></td>
                        </tr>
                        </tbody>
                        @endforeach
                        <table class="table">
                        <thead class="thead-light">
                        <tr>
                        </tr>
                        </thead>
                        </table>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: {{ $totalPrice }}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No Items in Cart!</h2>
            </div>
        </div>
    @endif
@endsection
