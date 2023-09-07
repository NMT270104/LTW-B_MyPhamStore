@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Fresh and Organic</p>
                    <h1>Shop</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@section('content')
<div class="row">
    @foreach ($viewData['products'] as $product)
    <div class="col-md-4 col-lg-3 mb-2">
        <div class="card">
            <img src="{{asset('/storage/' . $product->getImage())}}"
            class="card-img-top">
            <div class="card-body text-center">
                <a href="{{ route('product.show', ['id' => $product['id']]) }}"
                class="btn bg-primary text-white">{{ $product['name'] }}</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection