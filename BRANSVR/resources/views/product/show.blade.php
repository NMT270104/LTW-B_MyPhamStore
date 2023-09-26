@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>See more Details</p>
                    <h1>Product</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@section('content')
<div class="single-product mt-150 mb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-5" style="padding-bottom:50px; ">
                <div class="single-product-img">
                    <img src="{{ asset('/storage/'.$viewData["product"]->getImage()) }}"
                    class="img-fluid rounded-start">
                </div>
            </div>
            <div class="col-md-7">
                <div class="single-product-content">
                    <h3>{{ $viewData['product']['name'] }}</h3>
                    <p class="single-product-pricing">{{ $viewData['product']['price'] }}.000đ</p>
                    <div>
                        <p style="overflow: hidden; max-height: 80px">{{ $viewData['product']['description'] }}</p>
                        <div class="row justify-content-between"  style="margin-top: -20px; padding-bottom: 20px">
                            <div class="col-auto">
                                
                                <a class="py-2" data-bs-toggle="collapse" href="#collapseIfo" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Show more
                                </a>
                                <div class="collapse" id="collapseIfo">
                                    <div class="card card-body"><p>{{ $viewData['product']['description'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    
                    <div class="single-product-form">
                        <form method="POST" action="{{ route('cart.add', ['id' => $viewData['product']->getId()]) }}">
                            @csrf
                            <input type="number" placeholder="0" name="quantity" value="1" min="1" max="10">
                        
                            <button type="submit"class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <h3 class="fw-normal">Detail Product</h3> 
            </thead>
            <tbody>
                <tr>
                    <td class="text-secondary" style="width: 200px;">Type Product: </td>
                    <td>{{ $viewData['product']['type'] }}</td>
                </tr>
                <tr>
                    <td class="text-secondary" style="width: 200px;">Trade Smark Product: </td>
                    <td>{{ $viewData['product']['tradesmark'] }}</td>
                </tr>
                <tr>
                    <td class="text-secondary" style="width: 200px;">Volume Product: </td>
                    <td>{{ $viewData['product']['mass'] }}g</td>
                </tr>
                <tr>
                    <td class="text-secondary" style="width: 200px;">Send from: </td>
                    <td>{{ $viewData['product']['volume'] }}ml</td>
                </tr>
            </tbody>
        </table>     
                <h4>Share: </h4>
                    <ul class="product-share px-3">
                        <li><a href=""><i class="fa-brands fa-facebook fa-lg"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-google-plus-g fa-lg"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-linkedin-in fa-lg"></i></a></li>
                        <li><a href=""><i class="fa-solid fa-dove fa-lg"></i></a></li>
                    </ul>         
        </div>
    </div>
</div>
@endsection