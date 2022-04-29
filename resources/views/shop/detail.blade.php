@extends('layouts.master')

@section('title')
    Shopping Cart
@endsection

@section('content')
<!DOCTYPE html>
    <html lang="en">
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Product Detail</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

    </head>

    <body>

    <div class="container">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">

                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1"><img src="{{$product->imagePath}}" /></div>
                            <div class="tab-pane" id="pic-2"><img src="{{$product->imagePath}}" /></div>
                            <div class="tab-pane" id="pic-3"><img src="{{$product->imagePath}}" /></div>
                            <div class="tab-pane" id="pic-4"><img src="{{$product->imagePath}}" /></div>
                            <div class="tab-pane" id="pic-5"><img src="{{$product->imagePath}}" /></div>
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{$product->imagePath}}" /></a></li>
                            <li><a data-target="#pic-2" data-toggle="tab"><img src="{{$product->imagePath}}" /></a></li>
                            <li><a data-target="#pic-3" data-toggle="tab"><img src="{{$product->imagePath}}" /></a></li>
                            <li><a data-target="#pic-4" data-toggle="tab"><img src="{{$product->imagePath}}" /></a></li>
                            <li><a data-target="#pic-5" data-toggle="tab"><img src="{{$product->imagePath}}" /></a></li>
                        </ul>

                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title">{{$product->title}}</h3>
                        <div class="rating">
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <span class="review-no">41 reviews</span>
                        </div>
                        <p class="product-description">{{$product->description}}</p>
                        <h4 class="price">current price: <span>${{$product->price}}</span></h4>
                        <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                        <h5 class="colors">colors:
                            <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
                            <span class="color green"></span>
                            <span class="color blue"></span>
                        </h5>
                        <div class="action">
                            <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="add-to-cart btn btn-default" type="button">add to cart</a>
                            <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
@endsection
