@extends('Layouts.app')
@section('title', $viewData['title'])

<div class="homepage-slider">
    <!-- single home slider -->
    <div class="single-homepage-slider homepage-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle" style="font-size: 50px">SVR</p>
                            <h1>Buy one get the second</h1>
                            <div class="hero-btns">
                                <a href="{{route('product.index')}}" class="boxed-btn">Collection</a>
                                <a href="#" class="bordered-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- single home slider -->
<div class="single-homepage-slider homepage-bg-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-right">
                <div class="hero-text">
                    <div class="hero-text-tablecell">
                        <p class="subtitle">Mega Sale Going On!</p>
                        <h1>Get December Discount</h1>
                        <div class="hero-btns">
                            <a href="{{route('product.index')}}" class="boxed-btn">Visit Shop</a>
                            <a href="#" class="bordered-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end home page slider -->
@section('content')
<div class="row">
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{asset('/img/products/product-1.png')}}" alt="" class="img-fluid rounded">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{asset('/img/safe.png')}}" alt="" class="img-fluid rounded">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{asset('/img/submarine.png')}}" alt="" class="img-fluid rounded">
    </div>
</div>
    

@endsection