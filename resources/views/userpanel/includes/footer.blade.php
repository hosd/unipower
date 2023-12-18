<!-- ===============================FOOTER======================================== -->

<div class="container-fluid" style="background-color: #eeeeee;">
    <div class="container footer">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div>
                    <div class="top_logo" data-aos="fade-up">
                        <img src="{{ asset('public/frontend/images/logo.png') }}" class="m-auto w-100" alt="">
                    </div>
                    <br>
                    <!-- <p data-aos="fade-down">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
                    <div data-aos="fade-down">
                        <h5 class="mb-3">{{ $contactInfo->heading_title }}</h5>
                        <p class="mb-1">{{ $contactInfo->address }}</p>
                        <a href="mailto:{{ $contactInfo->email }}">
                            <p class="mb-1">{{ $contactInfo->email }}</p>
                        </a>
                        <p class="mb-1"><b>Tel:</b> <a href="tel:{{ $contactInfo->phone_number_1 }}"
                                style="color: #616161;">{{ $contactInfo->phone_number_1 }}</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a
                                href="tel:{{ $contactInfo->phone_number_2 }}0112-302347" style="color: #616161;">{{ $contactInfo->phone_number_2 }}</a></p>
                        <p class="mb-1"><b>Fax:</b> {{ $contactInfo->fax }}</p>
                    </div>
                </div>
                <br class="d-lg-none d-block">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up">
                <div>
                    <h5 class="mb-3">What We Do</h5>
                    <a href="#">
                        <p class="mb-1">Farmer Training and Extension</p>
                    </a>
                    <a href="#">
                        <p class="mb-1">Field Demonstrations</p>
                    </a>
                    <a href="#">
                        <p class="mb-1">Nutrient Advice and Crop Clinics</p>
                    </a>
                    <a href="#">
                        <p class="mb-1">Innovative Agri Technology</p>
                    </a>
                    <!-- <a href="#"><p class="mb-1">Laboratory Services</p></a> -->
                    <a href="#">
                        <p class="mb-1">All Services</p>
                    </a>
                </div>
                <br class="d-lg-none d-block">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-down">
                <div>
                    <h5 class="mb-3">Quick Links</h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="#">
                                <p class="mb-1">Home</p>
                            </a>
                            <a href="#">
                                <p class="mb-1">About us</p>
                            </a>
                            <a href="#">
                                <p class="mb-1">Products</p>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <a href="#">
                                <p class="mb-1">Services</p>
                            </a>
                            <a href="#">
                                <p class="mb-1">News & Events</p>
                            </a>
                            <a href="#">
                                <p class="mb-1">Contact us</p>
                            </a>
                        </div>
                    </div>
                </div>
                <br class="d-lg-none d-block">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <!-- <div data-aos="fade-up">
            <h5 class="mb-3">Sign-up for our Newsletter</h5>
            <div class="newsletter">
              <form action="">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Enter your email" aria-label="User's email" aria-describedby="button-addon2">
                  <button class="btn" type="button" id="button-addon2"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                </div>
              </form>
            </div>
          </div>
          <br> -->
                <div>
                    <h5 class="mb-3">Join us on Social Media</h5>
                    <div>
                        <div class="social_links">
                            <a href="#"><i class="fa fa-facebook p-2" aria-hidden="true"></i></a> &nbsp; &nbsp;
                            <a href="#"><i class="fa fa-linkedin p-2" aria-hidden="true"></i></a> &nbsp; &nbsp;
                            <a href="#"><i class="fa fa-twitter p-2" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <br class="d-lg-none d-block">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid footer_bottom py-2" style="border-top: 1px solid #333333;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <p>© Unipower 2023 All Rights Reserved.
                    Solution by <a style="color: #F5DEB3;" href="https://www.tekgeeks.net/">TekGeeks</a></p>
            </div>
            <div class="col-lg-6 col-md-6 col-12 bottom_links">
                <a href="#">
                    <p class="mb-0">Privacy Policy</p>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- ===============================FOOTER======================================== -->



<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="{{ asset('public/frontend/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>


<!--loading effects-->
<script src="{{ asset('public/frontend/js/aos.js') }}"></script>

<script>
    AOS.init({
    easing: 'ease-out-back',
            duration: 1000
    });
</script>
<!--loading effects-->

<!-- owl carousel js -->
<script>
    $(function() {
    // Owl Carousel
    var owl = $(".serv_caro");
    owl.owlCarousel({
      autoplay:true,
      autoplayTimeout:5000,
      autoplayHoverPause:true,
      margin: 10,
      loop: true,
      nav: false,
      dots: true,
      responsive: { 0: { items: 1, }, 575: { items: 2, }, 740: { items: 2, }, 991: { items: 3, }, 1025: { items: 4, }, },
    });
  });
</script>

<script>
    $(function() {
    // Owl Carousel
    var owl = $(".client_slider");
    owl.owlCarousel({
      autoplay:true,
      autoplayTimeout:4000,
      autoplayHoverPause:true,
      margin: 10,
      loop: true,
      nav: true,
      dots: false,
      responsive: { 0: { items: 3, }, 400: { items: 3, }, 740: { items: 4, }, 940: { items: 5, }, 1025: { items: 5, }, },
    });
  });
</script>
<!-- owl carousel js -->

<script>
    $(function() {
    // Owl Carousel
    var owl = $(".first_client_slider");
    owl.owlCarousel({
      autoplay:true,
      autoplayTimeout:4000,
      autoplayHoverPause:true,
      margin: 10,
      loop: true,
      nav: false,
      dots: false,
      responsive: { 0: { items: 3, }, 400: { items: 4, }, 740: { items: 4, }, 940: { items: 4, }, 1025: { items: 4
        , }, },
    });
  });
</script>
<!-- owl carousel js -->

<!-- owl carousel -->
<script src="{{ asset('public/frontend/owl/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/frontend/owl/owl_js.js') }}"></script>
<!-- owl carousel -->

<!-- Search Bar  -->
<script>
    $(".search_nav").click(function () {
    $("#search-wrap").addClass('panelactive');
    $('#search-text').focus();
    });

    $(".close-btn").click(function () {
        $("#search-wrap").removeClass('panelactive');
    });
</script>

<script>
    $(".mob_search").click(function () {
    $("#search-wrap").addClass('panelactive');
    $('#search-text').focus();
    });

    $(".close-btn").click(function () {
        $("#search-wrap").removeClass('panelactive');
    });
</script>
<!-- Search Bar  -->

<!--jarallax js-->
<script src="{{ asset('public/frontend/jarallax/jarallax_js.js') }}"></script>
<!--jarallax js-->

<!--jarallax-->
<script type="text/javascript">
    /* init Jarallax */
      $('.jarallax').jarallax({
          speed: 0.5,
          imgWidth: 1366,
          imgHeight: 768
      })
</script>
<!--jarallax-->

<!-- scroll top -->
<script type="module">
    import ScrollTop from 'https://cdn.skypack.dev/smooth-scroll-top';
    const scrollTop = new ScrollTop();
    scrollTop.init();
</script>
<!-- scroll top -->

</body>

</html>