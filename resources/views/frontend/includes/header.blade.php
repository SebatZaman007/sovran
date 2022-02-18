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
