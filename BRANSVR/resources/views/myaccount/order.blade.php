@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>All products you have purchased</p>
                    <h1>Check Out Product</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@section('content')
@forelse ($viewData["orders"] as $order)
    <div class="card mb-4">
        <div class="card-header">
            Order #{{ $order->getId() }}
        </div>
        <div class="card-body">
{{-- insert code card-body --}}
            <b>Date:</b> {{ $order->getCreatedAt() }}<br />
            <b>Total:</b> {{ $order->getTotal() }}.000đ<br />
            <table class="table table-bordered table-striped text-center mt-3">
            <thead>
                <tr>
                    <th scope="col">Item ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($order->getItems() as $item)
                <tr>
                    <td>{{ $item->getId() }}</td>
                    <td>
                        <a class="link-success"
                        href="{{ route('product.show', ['id' => $item->getProduct()->getId()]) }}">
                        {{ $item->getProduct()->getName() }}
                    </a>
                    </td>
                    <td>{{ $item->getPrice() }}.000đ</td>
                    <td>{{ $item->getQuantity() }}</td>
                </tr>

            @endforeach
            </tbody>
        </table>

        </div>
    </div>
@empty
<div class="alert alert-danger" role="alert">
    You have not purchased any products yet. Buy our products <a href="{{route('product.index')}}">here.</a>
</div>
@endforelse
@endsection