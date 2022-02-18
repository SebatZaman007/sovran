<!DOCTYPE html>
<html lang="en">

@include('frontend.includes.head')

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">

    <!-- Pre Loader Area start -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Pre Loader Area End -->

  @include('frontend.includes.header')

    @yield('content')

    

@include('frontend.includes.footer')

    <!--=======================================
    All Jquery Script link
===========================================-->
   @include('frontend.includes.scripts')

</body>

</html>
