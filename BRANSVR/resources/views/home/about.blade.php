@extends('Layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p></p>
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@section('content')
<div class="row">
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