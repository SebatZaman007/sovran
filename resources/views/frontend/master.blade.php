<!DOCTYPE html>
<html lang="en">

@include('frontend.includes.head')

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">

    <!-- Pre Loader Area start -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Pre Loader Area End -->

    <!--Main Menu/Navbar Area Start -->
    <section class="menu-section-area p-0">
        <!-- Desktop Navigation -->
        <nav class="navbar sticky-header navbar-expand-lg" id="mainNav">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img src="{{asset(BlogImage().$mainlogo->mainlogo_image)}}" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="main-menu-collapse collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#club-video">Club video</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#members-merchants">Members &
                                Merchants</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#network">Sovran Network</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#mobile-app">Mobile app</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#contact">Contact</a></li>
                        <li class="nav-item menu-search"><button class="btn" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><img
                                    src="{{asset('frontend/assets/img/search.png')}}" alt="icon"> <span>Search</span></button></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Desktop Navigation Offcanvas Search Box -->
        <div class="offcanvas offcanvas-top desktop-search-form" tabindex="-1" id="offcanvasTop"
            aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasTopLabel"></h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form class="d-flex">
                    <div class="form-group bg-white">
                        <input class="form-control me-2 bg-white" type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="px-2" type="submit"><img src="{{asset('frontend/assets/img/search.png')}}" alt="icon"></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Desktop Navigation Offcanvas Search Box -->

        <!-- Desktop Navigation -->

        <!-- Mobile Navigation -->
        <nav class="navbar d-none bg-white" id="mobileNav">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img src="{{asset('frontend/assets/img/logo.png')}}" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#home">Home</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" aria-current="page" href="#club-video">Club
                                    video</a></li>
                            <li class="nav-item"><a class="nav-link" aria-current="page" href="#about">About</a></li>
                            <li class="nav-item"><a class="nav-link" aria-current="page"
                                    href="#members-merchants">Members & Merchants</a></li>
                            <li class="nav-item"><a class="nav-link" aria-current="page" href="#network">Sovran
                                    Network</a></li>
                            <li class="nav-item"><a class="nav-link" aria-current="page" href="#mobile-app">Mobile
                                    app</a></li>
                            <li class="nav-item"><a class="nav-link" aria-current="page" href="#contact">Contact</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2 bg-white" type="search" placeholder="Search"
                                aria-label="Search">
                            <button class="px-2" type="submit"><img src="{{asset('frontend/assets/img/search.png')}}" alt="icon"></button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Mobile Navigation -->

    </section>
    <!--Main Menu/Navbar Area Start -->

    <!-- Header Start -->
    <header id="home" class="home-banner-area">
        <div class="container-fluid">
            <div class="row hero-area-wrapper position-relative">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <!--Hero Area Wrapper-->
                    <div class="hero-area-content">
                        <h1 class="color-heading">{{$home->home_name1}}
                             <br>
                             {{$home->home_name2}} <br>
                             {{$home->home_name3}} <br>
                             {{$home->home_name4}} <button type="button" class="font-18" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"><span class="iconify"
                                    data-icon="bx:bx-edit"></span></button></h1>
                        <p>{{$home->home_description}}</p>
                    </div>
                    <!--Hero Area Wrapper-->
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="hero-right-wrapper">
                        <div class="hero-right-bg box">
                            <img src="{{asset(BlogImage().$home->home_image)}}" alt="img" class="img-fluid">
                        </div>
                        <span class="coordinates"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Page Builder Modal Start -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="button" class="btn send-btn w-100 p-2">Send message</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger p-2" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Builder Modal End -->

    <!-- Video Area Start -->
    <section id="club-video" class="video-area section-t-space overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-5 wow animate__animated animate__fadeInUp">
                    <div class="video-wrapper">
                        <div class="video-poster">
                            <img src="{{asset(BlogImage().$videoposter->videoposter_image)}}" alt="Video" class="img-fluid ">
                        </div>
                        <div class="video-poster-text text-uppercase position-absolute text-white">
                            {{$videoposter->videoposter_description}}
                        </div>
                        <a class="venobox play-button" data-vbtype="video" data-autoplay="true"
                                href="{{$videoposter->videoposter_videolink}}">
                            <img src="{{asset('frontend/assets/img/play-icon.png')}}" alt="Play">
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-7 wow animate__animated animate__fadeInUp">
                    <div class="video-area-right">
                        <h1 class="text-uppercase">{{$videoarea->videoarea_name}}
                         </h1>
                        <p class="font-24 color-purple text-uppercase">{{$videoarea->videoarea_description}}</p>
                        <p class="video-para-content">{{$videoarea->videoarea_pera}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Area End -->

    <!-- Ecommerce with an edge Area Start -->
    <section class="ecommerce-with-an-edge-area p-0 overflow-hidden">
        <div class="container">
            <div
                class="col-12 ecommerce-border-wrap section-t-space section-b-space wow animate__animated animate__fadeInUp">
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="ecommerce-edge-title">
                            <h3 class="text-uppercase">{{$ecommrceedgelarge->ecommrceedgelarge_title}}
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal1">
                                    Launch demo modal
                                </button>

                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="ecommerce-edge-para">
                            <p>{{$ecommrceedgelarge->ecommrceedgelarge_pera}}
                            </p>
                        </div>
                    </div>
                    @foreach ($ecommrceedgesmall as $ecommrceedgesmallItem)
                        <div class="col-md-6 col-lg-2">
                            <div class="ecommerce-edge-small-box text-uppercase">
                                <h5>{{$ecommrceedgesmallItem->ecomrceedgesmall_name}}</h5>
                                <p class="font-13 text-uppercase">
                                    {{$ecommrceedgesmallItem->ecomrceedgesmall_pera}}</p>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>
    <!-- Ecommerce with an edge Area End -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal1Label">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    </h3>

    <!-- About Area Start -->
    <section id="about" class="about-area section-t-space overflow-hidden">
        <div class="container">
            <div class="row about-wrapper align-items-center">
                <div class="col-12 col-md-12 col-lg-5 wow animate__animated animate__fadeInUp">
                    <!--About Left Side Start-->
                    <div class="about-left-side text-left position-relative">
                        <img src="{{asset(BlogImage().$about->about_image)}}" alt="img" class="img-fluid">
                    </div>
                    <!--About Left Side End-->
                </div>
                <div class="col-12 col-md-12 col-lg-7 wow animate__animated animate__fadeInUp">
                    <div class="row">
                        <div class="col-12">
                            <div class="about-title">
                                <p class="sub-title color-purple text-uppercase font-adieu">{{$about->about_header}}
                                    </p>
                                <h2 class="text-uppercase">{{$about->about_name1}} <br> {{$about->about_name2}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-7">
                            @foreach ($aboutcontent as $aboutcontentitem)
                            <div class="about-content-box">
                                <h4 class="text-uppercase">{{$aboutcontentitem->aboutcontent_name}}</h4>
                                <p>{{$aboutcontentitem->aboutcontent_pera}}</p>
                            </div>
                            @endforeach


                        </div>
                        <div class="col-md-12 col-lg-5">
                            <div class="about-content-box what-do-we-do-box">
                                <h4 class="text-uppercase">{{$about->about_whatdowedo}}</h4>
                                <p>{{$about->about_whatdowedo_pera}} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->

    <!-- Member and Merchants Area Start -->
    <section id="members-merchants" class="members-merchants-area section-t-space overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12 members-box-main">
                    <div class="members-box-wrap">
                        <div class="members-box-img position-relative wow animate__animated animate__zoomIn">
                            <img src="{{asset(BlogImage().$member->member_image)}}" alt="member" class="img-fluid">
                            <div class="members-img-gradient position-absolute"></div>
                        </div>
                        <div class="member-box-content wow animate__animated animate__fadeInUp">
                            <h6 class="text-white font-18 font-adieu text-uppercase text-decoration-underline">
                               {{$member->member_header}}</h6>
                            <h1 class="text-white text-uppercase">{{$member->member_title1}} <br> {{$member->member_title2}}</h1>

                            <div class="members-facility-list row text-white">
                                @foreach ($memberfasility as $memberfasilityitem)
                                @if ($loop->iteration<=8)
                                <div class="col-md-6">
                                    <div class="members-facility-list-item d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <span class="iconify" data-icon="bi:check-circle-fill"></span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">{{$memberfasilityitem->memberfasilitylist}}
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                {{-- <div class="col-md-6">
                                    <div class="members-facility-list-item d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <span class="iconify" data-icon="bi:check-circle-fill"></span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">Referral and residual rewards</div>
                                    </div>
                                    <div class="members-facility-list-item d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <span class="iconify" data-icon="bi:check-circle-fill"></span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">Financial stability</div>
                                    </div>
                                    <div class="members-facility-list-item d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <span class="iconify" data-icon="bi:check-circle-fill"></span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">Supports your Local Businesses and Communities
                                        </div>
                                    </div>
                                    <div class="members-facility-list-item d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <span class="iconify" data-icon="bi:check-circle-fill"></span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">True Financial Freedom</div>
                                    </div>
                                </div> --}}
                            </div>

                        </div>

                    </div>
                    <div class="members-box-wrap">
                        <div class="members-box-img position-relative wow animate__animated animate__zoomIn">
                            <img src="{{asset(BlogImage().$marchent->marchent_image)}}" alt="member" class="img-fluid">
                            <div class="members-img-gradient position-absolute"></div>
                        </div>
                        <div class="member-box-content wow animate__animated animate__fadeInUp">
                            <h6 class="text-white font-18 font-adieu text-uppercase text-decoration-underline">{{$marchent->marchent_header}}
                                </h6>
                            <h1 class="text-white text-uppercase">{{$marchent->marchent_title1}} <br> {{$marchent->marchent_title2}}</h1>

                            <div class="members-facility-list row text-white">
                                @foreach ($memberfasility as $memberfasilityitem)
                                @if ($loop->iteration<=8)
                                <div class="col-md-6">
                                    <div class="members-facility-list-item d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <span class="iconify" data-icon="bi:check-circle-fill"></span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">{{$memberfasilityitem->memberfasilitylist}}
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @endforeach
                                {{-- <div class="col-md-6">
                                    <div class="members-facility-list-item d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <span class="iconify" data-icon="bi:check-circle-fill"></span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">Referral and residual rewards</div>
                                    </div>
                                    <div class="members-facility-list-item d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <span class="iconify" data-icon="bi:check-circle-fill"></span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">Financial stability</div>
                                    </div>
                                    <div class="members-facility-list-item d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <span class="iconify" data-icon="bi:check-circle-fill"></span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">Supports your Local Businesses and Communities
                                        </div>
                                    </div>
                                    <div class="members-facility-list-item d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <span class="iconify" data-icon="bi:check-circle-fill"></span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">True Financial Freedom</div>
                                    </div>
                                </div> --}}
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Member and Merchants Area End -->

    <!-- Sovran Network Area Start -->
    <section id="network" class="sovran-network-area section-t-space pb-0 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sovran-netowrk-title text-center wow animate__animated animate__zoomIn">
                        <h1 class="text-uppercase">Sovran Network</h1>
                        <p class="color-purple font-18 font-adieu text-uppercase">Distributed Financial Services Network
                        </p>
                    </div>
                </div>
            </div>

            <div class="sovran-network-content-wrap">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-7  wow animate__animated animate__fadeInUp">
                        <img src="{{asset(BlogImage().$network->network_image)}}" alt="network" class="img-fluid">
                    </div>
                    <div class="col-md-6 col-lg-5 wow animate__animated animate__fadeInRight">
                        <div class="network-list-wrap">
                            <h4 class="text-uppercase">{{$network->network_header}}</h4>

                            <div class="network-lists">
                                @foreach ($networklist as $networklistitem)
                                <div class="members-facility-list-item d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <span class="iconify" data-icon="bi:check-circle-fill"></span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">{{$networklistitem->networklist}}</div>
                                </div>
                                @endforeach

                            </div>

                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-7 wow animate__animated animate__fadeInUp">
                        <img src="{{asset('frontend/assets/img/network-2.png')}}" alt="network" class="img-fluid">
                    </div>
                    <div class="col-md-6 col-lg-5 wow animate__animated animate__fadeInLeft">
                        <div class="network-list-wrap">
                            <h4 class="text-uppercase">Sovran Shopping Coins</h4>

                            <div class="network-lists">
                                <div class="members-facility-list-item d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <span class="iconify" data-icon="bi:check-circle-fill"></span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">Provides savings and discounts for all members</div>
                                </div>
                                <div class="members-facility-list-item d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <span class="iconify" data-icon="bi:check-circle-fill"></span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">Mobile eWallet / digital bank account</div>
                                </div>
                                <div class="members-facility-list-item d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <span class="iconify" data-icon="bi:check-circle-fill"></span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">Shopping Club Debit card</div>
                                </div>
                                <div class="members-facility-list-item d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <span class="iconify" data-icon="bi:check-circle-fill"></span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">Great service from Merchants</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-7 wow animate__animated animate__fadeInUp">
                        <img src="{{asset('frontend/assets/img/network-3.png')}}" alt="network" class="img-fluid">
                    </div>
                    <div class="col-md-6 col-lg-5 wow animate__animated animate__fadeInRight">
                        <div class="network-list-wrap">
                            <h4 class="text-uppercase">Privacy and Encryption</h4>

                            <div class="network-lists">
                                <div class="members-facility-list-item d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <span class="iconify" data-icon="bi:check-circle-fill"></span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">Provides savings and discounts for all members</div>
                                </div>
                                <div class="members-facility-list-item d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <span class="iconify" data-icon="bi:check-circle-fill"></span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">Mobile eWallet / digital bank account</div>
                                </div>
                                <div class="members-facility-list-item d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <span class="iconify" data-icon="bi:check-circle-fill"></span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">Shopping Club Debit card</div>
                                </div>
                                <div class="members-facility-list-item d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <span class="iconify" data-icon="bi:check-circle-fill"></span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">Great service from Merchants</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Sovran Network Area End -->

    <!-- Coming Soon Area Start -->
    <section class="coming-soon-area overflow-hidden">
        <div class="container">
            <div class="row position-relative">
                <div class="col-md-3 col-lg-2">
                    <div
                        class="coming-soon-title coming-soon-title-left position-absolute wow animate__animated animate__fadeInLeft">
                        <p class="color-purple text-uppercase font-adieu font-18">Coming soon</p>
                        <h1 class="text-uppercase">Member <br> & Merchant </h1>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8 wow animate__animated animate__zoomIn">
                    <div class="coming-soon-product text-center box">
                        <img src="{{asset('frontend/assets/img/coming-soon-product.png')}}" alt="product" class="img-fluid">
                    </div>
                    <span class="coordinates"></span>
                </div>
                <div class="col-md-3 col-lg-2">
                    <div
                        class="coming-soon-title coming-soon-title-right position-absolute wow animate__animated animate__fadeInRight">
                        <h1 class="text-uppercase">Promotions</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Coming Soon Area End -->

    <!-- Mobile App Area Start -->
    <section id="mobile-app" class="mobile-app-area section-t-space overflow-hidden">
        <div class="container">
            <div class="row mobile-app-top-part wow animate__animated animate__fadeInDown">
                <div class=" col-12 col-md-12 col-lg-4">
                    <div class="mobile-app-title">
                        <h2 class="text-white text-uppercase">Mobile
                            App</h2>
                        <h6 class="text-white text-uppercase mt-2">Sovran Shopping In <br>
                            Your Pocket
                        </h6>
                    </div>
                </div>

                <div class=" col-12 col-md-6 col-lg-4">
                    <div class="mobile-app-item d-flex">
                        <div class="flex-shrink-0">
                            <img src="{{asset('frontend/assets/img/mobile-app-icon/mobile-app-icon-1.png')}}" alt="app" class="img-fluid">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="text-white text-uppercase">Personal Wallet</h5>
                            <p class="text-white">Sign in with 2FA, fingerprint or Face ID to access your wallet.</p>
                        </div>
                    </div>
                    <div class="mobile-app-item d-flex">
                        <div class="flex-shrink-0">
                            <img src="{{asset('frontend/assets/img/mobile-app-icon/mobile-app-icon-2.png')}}" alt="app" class="img-fluid">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="text-white text-uppercase">Smart Search</h5>
                            <p class="text-white">To find sellers and make transactions with QR code. </p>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-md-6 col-lg-4">
                    <div class="mobile-app-item d-flex">
                        <div class="flex-shrink-0">
                            <img src="{{asset('frontend/assets/img/mobile-app-icon/mobile-app-icon-3.png')}}" alt="app" class="img-fluid">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="text-white text-uppercase">Find Deals</h5>
                            <p class="text-white">View the lastest specials from merchants.</p>
                        </div>
                    </div>
                    <div class="mobile-app-item d-flex">
                        <div class="flex-shrink-0">
                            <img src="{{asset('frontend/assets/img/mobile-app-icon/mobile-app-icon-4.png')}}" alt="app" class="img-fluid">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="text-white text-uppercase">Push Alerts</h5>
                            <p class="text-white">To get notifications about transactions, prices etc.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 wow animate__animated animate__fadeInUp">
                    <div class="mobile-app-img text-center box">
                        <img src="{{asset('frontend/assets/img/mobile-app-img.png')}}" alt="app" class="img-fluid">
                    </div>
                    <span class="coordinates"></span>
                </div>
            </div>
        </div>
    </section>
    <!-- Mobile App Area End -->

    <!-- Join With Us Area Start -->
    <section id="contact" class="join-with-us-area text-center section-t-space overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12 wow animate__animated animate__zoomIn">
                    <div class="join-with-us-img">
                        <img src="{{asset('frontend/assets/img/join-with-us-img.png')}}" alt="app" class="img-fluid">
                    </div>
                    <div class="join-with-us-title">
                        <h1 class="text-uppercase">JOIN WITH US <br>
                            TODAY</h1>
                        <p class="text-uppercase">Support Merchants & Earn Rewards</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Join With Us Area End -->

    <!-- Special Features Area Start -->
    <section class="special-features-area pb-0 overflow-hidden">
        <div class="container">
            <div class="special-features-border-wrap">
                <div class="row section-b-90-space section-t-space wow animate__animated animate__fadeInUp">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="special-features-item d-flex">
                            <div class="flex-shrink-0">
                                <img src="{{asset('frontend/assets/img/special-features-icon/special-feature-1.png')}}" alt="icon">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-uppercase">SECURITY</h5>
                                <p>Sovran is secured using a hybrid of AES/SED encryption. Sovran encryption is
                                    patented.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="special-features-item d-flex">
                            <div class="flex-shrink-0">
                                <img src="{{asset('frontend/assets/img/special-features-icon/special-feature-2.png')}}" alt="icon">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-uppercase">Anonymity</h5>
                                <p>Sovran technology supports strong anonymity utilizing only your email without any
                                    personal data shared.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="special-features-item d-flex">
                            <div class="flex-shrink-0">
                                <img src="{{asset('frontend/assets/img/special-features-icon/special-feature-3.png')}}" alt="icon">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-uppercase">Efficiency</h5>
                                <p>Our network handles up to one million transactions per minute. There are no wait
                                    times when using Sovran.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="special-features-item d-flex">
                            <div class="flex-shrink-0">
                                <img src="{{asset('frontend/assets/img/special-features-icon/special-feature-4.png')}}" alt="icon">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-uppercase">Synchronization</h5>
                                <p>User admin dashboard and your data are securely synchronized across all your
                                    authorized devices.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Special Features Area End -->

    <!-- Footer Start -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="footer-logo-img">
                        <img src="{{asset('frontend/assets/img/footer-logo.png')}}" alt="footer">
                        <h6 class="text-uppercase font-18">Sovran Shopping Club</h6>
                    </div>
                </div>
            </div>
            <div class="row footer-text">
                <div class="col-12 col-md-8">
                    <p>Copyright © 2021 <a href="#">Sovran Shopping Club™</a>. All rights reserved. <a href="#">Terms of
                            Use</a> | <a href="#">Privacy Policy</a></p>
                </div>

                <div class="col-12 col-md-4">
                    <div class="footer-social">
                        <ul class=" d-flex justify-content-end">
                            <li><a href="#"><span class="iconify" data-icon="fluent:send-20-filled"></span></a></li>
                            <li><a href="#"><span class="iconify" data-icon="bi:vimeo"></span></a></li>
                            <li><a href="#"><span class="iconify" data-icon="eva:email-fill"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!--=======================================
    All Jquery Script link
===========================================-->
   @include('frontend.includes.scripts')

</body>

</html>
