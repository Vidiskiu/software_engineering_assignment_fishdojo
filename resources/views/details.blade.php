@extends('layouts.app')

@section('content')

<div class="jumbotron bg-color-3 text-white">
<div class="text-center">
    <h1 class="display-4">Taste the Sea in 4 Simple Clicks</h1>

    <section class="ftco-section">
    <div class="container">
    <div class="row no-gutters ftco-services">
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-diet"></span>
            </div>
            <div class="media-body">
                <h3 class="heading">Search Products</h3>
                <span>Fish, Sea Products, etc</span>
            </div>
        </div>
        </div>

        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-2 active d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-box"></span>
            </div>
            <div class="media-body">
                <h3 class="heading">Purchase Order</h3>
                <span>Remember to include details!</span>
            </div>
        </div>
        </div>

        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-3 active d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-award"></span>
            </div>
            <div class="media-body">
                <h3 class="heading">Pay for Transaction</h3>
                <span>Multiple payment methods available</span>
            </div>
        </div>
        </div>

        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-4 active d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-shipped"></span>
            </div>
            <div class="media-body">
                <h3 class="heading">Get it shipped!</h3>
                <span>Products arrive within 1-3 days</span>
            </div>
        </div>
        </div>
    </div>
    </div>
    </section>

    <a class="btn btn-primary btn-lg " href="{{route('index')}}" role="button">Start purchasing now</a>

</div>
</div>

@endsection
