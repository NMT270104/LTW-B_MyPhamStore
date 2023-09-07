@extends('Layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>We sale fresh fruits</p>
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@section('content')
<div class="row">
    <div class="col-lg-4 ms-auto">
        <p class="Lead">{{$viewData['description']}}</p>
    </div>
    <div class="col-lg-4 ms-auto">
        <p class="Lead">{{$viewData['author']}}</p>
    </div>
</div>
@endsection