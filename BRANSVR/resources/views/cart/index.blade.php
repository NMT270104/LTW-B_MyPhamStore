@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Fresh and Organic</p>
                    <h1>Cart</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@section('content')
<div class="cart-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="cart-table-wrap">
                    <table class="cart-table">
                        <thead class="cart-table-head">
                            <tr class="table-head-row">
                                <th class="product-remove"></th>
                                <th>Id</th>
                                <th class="product-image">Product Image</th>
                                <th class="product-name">Name</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($viewData["products"] as $product)
                            <tr class="table-body-row">
                                <td class="product-remove"><a href="{{ route('cart.remove', ['id' => $product->id]) }}">
                                    <i class="far fa-window-close"></i></a></td>
                                <td>{{ $product->getId() }}</td>
                                <td class="product-image"><img src="{{ asset('/storage/' . $product->getImage())}}"
                                    class="img-fluid rounded-start"></td>
                                <td class="product-name">{{ $product->getName() }}</td>
                                <td class="product-price">${{ $product->getPrice() }}</td>
                                <td class="product-quantity">{{ session('products')[$product->getId()] }}</td>
                            </tr>
                            
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="total-section">
                    <table class="total-table">
                        <thead class="total-table-head">
                            <tr class="table-total-row">
                                <th>Total</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <tr class="total-data">
                                <td><strong>Total: </strong></td>
                                <td>${{ $viewData["total"] }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="cart-buttons">
                        <a href="{{route('cart.purchase')}}" class="boxed-btn black">Purchase</a>
                        <a href="{{ route('myaccount.orders')}}" class="boxed-btn">Check out</a>
                    </div>
                    <div class="cart-buttons">
                        <a href="{{ route('cart.delete') }}" class="boxed-btn">Remove all products</a>
                    </div>
                </div>

                <div class="coupon-section">
                    <h3>Apply Coupon</h3>
                    <div class="coupon-form-wrap">
                        <form action="index.html">
                            <p><input type="text" placeholder="Coupon"></p>
                            <p><input type="submit" value="Apply"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection