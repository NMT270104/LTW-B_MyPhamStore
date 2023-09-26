@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p></p>
                    <h1>Purchase Completed</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@section('content')
<div class="card">
    <div class="card-header">
        Purchase Completed
    </div>
    <div class="card-body">
        <div class="alert alert-success" role="alert">
            Congratulations, purchase completed. Order number is
            <b>#{{ $viewData['order']->getId() }}. <a class="alert alert-success" href="{{route('myaccount.orders')}}">Check out now!</a></b>
        </div>
    </div>
</div>
@endsection