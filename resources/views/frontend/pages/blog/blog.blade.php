@extends('frontend.master')

@section('content')

<header class="page-banner-area" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="header-caption">
                    <h1 class="header-caption-heading text-capitalize">Our Blog</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-capitalize"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active text-capitalize" aria-current="page"><span class="iconify" data-icon="uil:angle-right"></span>Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="blog-page-area blog-grid-page-area pb-0">
    <div class="container">

        <!-- All Blog Posts Wrapper-->
        <div class="all-blog-posts-wrapper section-t-space section-b-space">
            <div class="row">

                <!--Single Blog Post Start-->
                @foreach ($blog as $blogitem)
                <div class="col-12 col-md-4 col-lg-4 col-xl-3">
                    <div class="single-blog-post overflow-hidden radius-4">
                        <a href="{{$blogitem->blog_link}}">
                            <img src="{{asset(BlogImage().$blogitem->blog_image)}}}" alt="Blog Img">
                        </a>
                        <div class="single-blog-content">
                            <p><span class="iconify" data-icon="bytesize:clock"></span>{{$blogitem->blog_date}}</p>
                            <h4 class="mt-1"><a href="{{$blogitem->blog_link}}">{{$blogitem->blog_header}}</a></h4>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--Single Blog Post End-->

                <!--Single Blog Post Start-->

                <div class="col-12 col-md-4 col-lg-4 col-xl-3">
                    <div class="single-blog-post overflow-hidden radius-4">
                        <a href="single-blog.html">
                            <img src="{{asset('frontend/assets/img/blog-img/1.jpg')}}" alt="Blog Img">
                        </a>
                        <div class="single-blog-content">
                            <p><span class="iconify" data-icon="bytesize:clock"></span>20 Feb, 2021</p>
                            <h4 class="mt-1"><a href="single-blog.html">Clean your hand properly...</a></h4>
                        </div>
                    </div>
                </div>



                <!--Single Blog Post End-->

                <!--Single Blog Post Start-->
                <div class="col-12 col-md-4 col-lg-4 col-xl-3">
                    <div class="single-blog-post overflow-hidden radius-4">
                        <a href="single-blog.html">
                            <img src="{{asset('frontend/assets/img/blog-img/1.jpg')}}" alt="Blog Img">
                        </a>
                        <div class="single-blog-content">
                            <p><span class="iconify" data-icon="bytesize:clock"></span>20 Feb, 2021</p>
                            <h4 class="mt-1"><a href="single-blog.html">Clean your hand properly...</a></h4>
                        </div>
                    </div>
                </div>
                <!--Single Blog Post End-->

                <!--Single Blog Post Start-->
                <div class="col-12 col-md-4 col-lg-4 col-xl-3">
                    <div class="single-blog-post overflow-hidden radius-4">
                        <a href="single-blog.html">
                            <img src="{{asset('frontend/assets/img/blog-img/1.jpg')}}" alt="Blog Img">
                        </a>
                        <div class="single-blog-content">
                            <p><span class="iconify" data-icon="bytesize:clock"></span>20 Feb, 2021</p>
                            <h4 class="mt-1"><a href="single-blog.html">Clean your hand properly...</a></h4>
                        </div>
                    </div>
                </div>
                <!--Single Blog Post End-->

                <!--Single Blog Post Start-->
                <div class="col-12 col-md-4 col-lg-4 col-xl-3">
                    <div class="single-blog-post overflow-hidden radius-4">
                        <a href="single-blog.html">
                            <img src="{{asset('frontend/assets/img/blog-img/1.jpg')}}" alt="Blog Img">
                        </a>
                        <div class="single-blog-content">
                            <p><span class="iconify" data-icon="bytesize:clock"></span>20 Feb, 2021</p>
                            <h4 class="mt-1"><a href="single-blog.html">Clean your hand properly...</a></h4>
                        </div>
                    </div>
                </div>
                <!--Single Blog Post End-->

                <!--Single Blog Post Start-->
                <div class="col-12 col-md-4 col-lg-4 col-xl-3">
                    <div class="single-blog-post overflow-hidden radius-4">
                        <a href="single-blog.html">
                            <img src="{{asset('frontend/assets/img/blog-img/1.jpg')}}" alt="Blog Img">
                        </a>
                        <div class="single-blog-content">
                            <p><span class="iconify" data-icon="bytesize:clock"></span>20 Feb, 2021</p>
                            <h4 class="mt-1"><a href="single-blog.html">Clean your hand properly...</a></h4>
                        </div>
                    </div>
                </div>
                <!--Single Blog Post End-->

                <!--Single Blog Post Start-->
                <div class="col-12 col-md-4 col-lg-4 col-xl-3">
                    <div class="single-blog-post overflow-hidden radius-4">
                        <a href="single-blog.html">
                            <img src="{{asset('frontend/assets/img/blog-img/1.jpg')}}" alt="Blog Img">
                        </a>
                        <div class="single-blog-content">
                            <p><span class="iconify" data-icon="bytesize:clock"></span>20 Feb, 2021</p>
                            <h4 class="mt-1"><a href="single-blog.html">Clean your hand properly...</a></h4>
                        </div>
                    </div>
                </div>
                <!--Single Blog Post End-->

                <!--Single Blog Post Start-->
                <div class="col-12 col-md-4 col-lg-4 col-xl-3">
                    <div class="single-blog-post overflow-hidden radius-4">
                        <a href="single-blog.html">
                            <img src="{{asset('frontend/assets/img/blog-img/1.jpg')}}" alt="Blog Img">
                        </a>
                        <div class="single-blog-content">
                            <p><span class="iconify" data-icon="bytesize:clock"></span>20 Feb, 2021</p>
                            <h4 class="mt-1"><a href="single-blog.html">Clean your hand properly...</a></h4>
                        </div>
                    </div>
                </div>
                <!--Single Blog Post End-->

                <!-- Blog Pagination Box-->
                <nav class="pagination-area">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item active"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">8</a></li>
                        <li class="page-item"><a class="page-link" href="#">9</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
                <!-- Blog Pagination Box-->

            </div>
        </div>
        <!-- All Blog Posts Wrapper-->

    </div>

</section>

@endsection
