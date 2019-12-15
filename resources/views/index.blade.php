@extends('layouts.app')

@section('content')

<!-- Slider -->
<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 ftco-animate text-center">
                <h1 class="mb-2">Purchase Fish &amp; Fish Products</h1>
                <h2 class="subheading mb-4">Delivers straight from the sea</h2>
                <p><a href="{{route('details')}}" class="btn btn-primary">View Details</a></p>
            </div>

            </div>
        </div>
        </div>

        <div class="slider-item" style="background-image: url(images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-sm-12 ftco-animate text-center">
                <h1 class="mb-2">100% Fresh Fish</h1>
                <h2 class="subheading mb-4">Delivers straight from the seas</h2>
            <p><a href="{{route('details')}}" class="btn btn-primary">View Details</a></p>
            </div>

            </div>
        </div>
        </div>
    </div>
</section>
<!-- End Slider -->

<section class="ftco-section">
<div class="container">
    <div class="row no-gutters ftco-services">
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-shipped"></span>
            </div>
            <div class="media-body">
            <h3 class="heading">Free Shipping</h3>
            <span>On order over $100</span>
            </div>
        </div>
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-diet"></span>
            </div>
            <div class="media-body">
            <h3 class="heading">Always Fresh</h3>
            <span>Product well packaged</span>
            </div>
        </div>
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-award"></span>
            </div>
            <div class="media-body">
            <h3 class="heading">Superior Quality</h3>
            <span>Quality Products</span>
            </div>
        </div>
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-customer-service"></span>
            </div>
            <div class="media-body">
            <h3 class="heading">24/7 Support</h3>
            <span>Always Happy to Serve</span>
            </div>
        </div>
        </div>
    </div>
</div>
</section>

<section class="ftco-section">
    <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
        <div class="col-md-12 heading-section text-center ftco-animate">
        <span class="subheading">Featured Products</span>
        <h2 class="mb-4">On Demand Items</h2>
        <p>Far far away, behind the word sea, far away from earth</p>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="{{route('product-single', $product->id)}}" class="img-prod"><img class="img-fluid" src="images/product-1.jpg" alt="Colorlib Template">
                        <span class="status">{{$product->sale*100}}%</span>
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">{{$product->product_name}}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="mr-2 price-dc">$ {{$product->price}}</span><span class="price-sale">$ {{$product->price * (1 - $product->sale)}}</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                    <span><i class="ion-ios-heart"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
</section>

@endsection

@section('topofpage')
    @include('layouts.topofpage')
@endsection