@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>All products are here</p>
                    <h1>SVR products</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@section('content')
<div class="container px-4 px-lg-5 mt-5">
    <div class="row justify-content-center py-5">
        <div class="col-auto"><p class="text-center">The laboratory SVR shop offers a wide range of effective dermatological articles to treat all skin types. Discover an overview of our products for squamous, dry, acne, or atopic skin.</p></div>
    </div>
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        @foreach ($viewData['products'] as $product)
        <div class="col mb-5">
            <div class="card h-100">
                <a href="{{ route('product.show', ['id' => $product['id']]) }}"><img class="card-img-top" style="width: 450px; height: 200px;"
                src="{{asset('/storage/' . $product->getImage())}}" alt="..." /></a>
                <!-- Product details-->
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder" style="overflow: hidden; max-height: 40px"><a style="color: black" href="{{ route('product.show', ['id' => $product['id']]) }}">{{ $product['name'] }}</a></h5>v.v...
                        <!-- Product reviews-->
                        <div class="d-flex justify-content-center small text-warning mb-2">
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                        </div>
                            <!-- Product price-->
                        <span class="">{{ $product['price'] }}.000đ</span>
                    </div>
                </div>
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center">
                        <a class="btn btn-outline-dark mt-auto" href="{{ route('product.show', ['id' => $product['id']]) }}">
                            Add to cart</a></div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection