 <!-- Footer Start -->
 <footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="footer-logo-img">
                    <img src="{{asset(BlogImage().$footerleft->footerleft_image)}}" alt="footer">
                    <h6 class="text-uppercase font-18">{{$footerleft->footerleft_title}}</h6>
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
                        @foreach ($footerlink as $footerlinkitem)
                        <li><a href="{{$footerlinkitem->footerlink_link}}"><span class="iconify" data-icon="{{$footerlinkitem->footerlink_icon}}"></span></a></li>

                        @endforeach

                        {{-- <li><a href="#"><span class="iconify" data-icon="bi:vimeo"></span></a></li>
                        <li><a href="#"><span class="iconify" data-icon="eva:email-fill"></span></a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
