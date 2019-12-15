@extends('layouts.app')

@section('content')
<div class="hero-wrap overlay hero-bread">
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Home</a></span>&#8250; <span>About us</span></p>
        <h1 class="mb-0 bread">About us</h1>
        </div>
    </div>
    </div>
</div>

<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
<div class="container">
    <div class="row">
        <div class="col-md-5 p-md-5 img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
            <a href="https://www.youtube.com/watch?v=QpGydp1hEwE" class="icon popup-vimeo d-flex justify-content-center align-items-center">
                <span class="icon-play"></span>
            </a>
        </div>
        <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
            <div class="heading-section-bold mb-4 mt-md-5">
                <div class="ml-md-0">
                    <h2 class="mb-4">Welcome to FishDojo, a fish product marketplace</h2>
                </div>
            </div>
            <div class="pb-md-5">
                <p>Far far away, behind the word sea, far away from earth</p>
            </div>
        </div>
    </div>
</div>
</section>

<section class="ftco-section">
<div class="container">
    <div class="row">
        <h1>FishDojo - connecting you to the sea</h1>
        <div class="text-justify">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut tristique et egestas quis ipsum. Cursus sit amet dictum sit amet justo donec. Amet commodo nulla facilisi nullam vehicula ipsum a arcu cursus. Et odio pellentesque diam volutpat. Quam vulputate dignissim suspendisse in. Congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar. Morbi tempus iaculis urna id volutpat lacus laoreet. Gravida quis blandit turpis cursus in. Et tortor consequat id porta nibh venenatis cras. Suspendisse faucibus interdum posuere lorem ipsum dolor sit. Malesuada fames ac turpis egestas sed. Mi sit amet mauris commodo quis imperdiet massa tincidunt nunc.</p>

        <p>Lectus quam id leo in vitae turpis massa. Ac tortor vitae purus faucibus ornare suspendisse sed nisi. Morbi enim nunc faucibus a pellentesque. Id diam maecenas ultricies mi eget mauris pharetra et ultrices. Ullamcorper sit amet risus nullam. Elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at augue. Vitae congue eu consequat ac felis donec et. Pellentesque elit eget gravida cum sociis natoque penatibus. Faucibus pulvinar elementum integer enim. Eu nisl nunc mi ipsum. Felis bibendum ut tristique et egestas quis ipsum. Vestibulum rhoncus est pellentesque elit. Sed ullamcorper morbi tincidunt ornare massa eget egestas. Dui vivamus arcu felis bibendum ut. Phasellus faucibus scelerisque eleifend donec.</p>
        </div>
    </div>

    <div class="row justify-content-center"><h1 class="pt-2 pb-2">Members</h1></div>

    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
                <a href="https://id.linkedin.com/in/denniskiu-fk-257a3b174" class="center img-prod"><img src="{{asset('images/members/denniskiu.jpg')}}" class="rounded img-fluid mx-auto d-block" alt="Colorlib Template">
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="https://id.linkedin.com/in/denniskiu-fk-257a3b174">Denniskiu Fortino Kurniawan</a></h3>
                    <div class="d-flex">
                        <div class="pricing">
                            <p class="price"><span>NIM</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
                <a href="https://id.linkedin.com/in/hilda-setiawarga-aa76a2157" class="center img-prod"><img src="{{asset('images/members/hilda.jpg')}}" class="rounded img-fluid mx-auto d-block" alt="Colorlib Template">
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="https://id.linkedin.com/in/hilda-setiawarga-aa76a2157">Hilda Setiawarga</a></h3>
                    <div class="d-flex">
                        <div class="pricing">
                            <p class="price"><span>NIM</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
                <a href="https://id.linkedin.com/in/ida-bagus-anom-indra-bagaskara-985907164" class="center img-prod"><img src="{{asset('images/members/anom.jpg')}}" class="rounded img-fluid mx-auto d-block" alt="Colorlib Template">
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="https://id.linkedin.com/in/ida-bagus-anom-indra-bagaskara-985907164">Ida Bagus Anom I. B.</a></h3>
                    <div class="d-flex">
                        <div class="pricing">
                            <p class="price"><span>NIM</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
                <a href="https://id.linkedin.com/in/andreaskev" class="center img-prod"><img src="{{asset('images/members/kevin.jpg')}}" class="rounded img-fluid mx-auto d-block" alt="Colorlib Template">
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="https://id.linkedin.com/in/andreaskev">Andreas Kevin Rahman</a></h3>
                    <div class="d-flex">
                        <div class="pricing">
                            <p class="price"><span>NIM</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
                <a href="https://id.linkedin.com/in/vidiskiufk" class="center img-prod"><img src="{{asset('images/members/vidiskiu.jpg')}}" class="rounded img-fluid mx-auto d-block" alt="Colorlib Template">
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="https://id.linkedin.com/in/vidiskiufk">Vidiskiu Fortino Kurniawan</a></h3>
                    <div class="d-flex">
                        <div class="pricing">
                            <p class="price"><span>16/395999/PA/17340</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
                <a href="https://id.linkedin.com/" class="center img-prod"><img src="{{asset('images/members/kevin.jpg')}}" class="rounded img-fluid mx-auto d-block" alt="Colorlib Template">
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="https://id.linkedin.com/">Salfarizi K.</a></h3>
                    <div class="d-flex">
                        <div class="pricing">
                            <p class="price"><span>NIM</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection

@section('topofpage')
    @include('layouts.topofpage')
@endsection