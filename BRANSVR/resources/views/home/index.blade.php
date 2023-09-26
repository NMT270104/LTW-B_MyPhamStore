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
<div class="single-homepage-slider homepage-bg-2">
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
<div class="container">
    <div class="row ">
        <div class="col-auto py-4"><img src="{{asset('img/giammuntichuyengiajpg.jpg')}}" alt="">
        </div>
        <div class="col-auto py-4"><img src="{{asset('img/bikip3buoc.jpg')}}" alt=""></div>
        <div class="col-auto py-4"><img src="{{asset('img/trungthudoanvien.jpg')}}" alt=""></div>
    </div>
</div>
<div class="container px-4 px-lg-5 mt-5">
    <div class="row justify-content-center py-5">
        <div class="col-auto"><h2>Featured Products</h2></div>
    </div>
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        @foreach ($viewData['products'] as $product)
        <div class="col mb-5">
            <div class="card h-100">
                <!-- Sale badge-->
                {{-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> --}}
                <!-- Product image-->
                <!--img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." /-->
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
<div>
    <p class="text-center"></p>
        <p class="text-center"></p>
        <p class="text-center"></p>
        <p class="text-center"></p>
        <p class="text-center"></p>
     
</div>
<div class="row" >
    <div class="col-lg-4 ms-auto">
        <p class="text-center"></p>
        <p class="text-center"></p>
        <p class="text-center"></p>
        <h3 class="Lead">SVR has been a French dermocosmetic brand since 1962. The laboratory offers effective dermatological solutions for all types of skin.
        </h3>
    </div>
    <div class="col-lg-4 ms-auto">
        <h5 class="text-center">The brand</h5>
        <p class="text-center">Our manifesto</p>
        <p class="text-center">Endocrine disruptors</p>
        <p class="text-center">Terms of use</p>
        <p class="text-center">Refund policy</p>
        
    </div>
    <div class="col-lg-4 ms-auto">
      {{-- <p class="text-center"></p> --}}
        <h5 class="text-center">Customer service</h5>
        <p class="text-center">Contact</p>
        <p class="text-center">Point of sale</p>
        <p class="text-center">FAQ</p>
        <p class="text-center">TERMS</p>
        <p class="text-center">Returns & refunds</p>
        <p class="text-center">Join us</p>
        <p class="text-center">Privacy Policy</p>
        <p class="text-center">Cookie policy</p>
        <p class="text-center">Legal</p>
        <p class="text-center">Shipment tracking</p>

    </div>
</div>



@endsection