<!DOCTYPE html>
<html lang="en">
@include('site.layouts.head')
<body>
<!-- Pre-Loader -->
<div class="preloader">
<img src="{{ asset('assets/front') }}/assets/img/logo-serta-png.gif" style="height: 80px; width: 200px;">
<!-- <span class="loader"></span> -->
</div>

@include('site.layouts.header')

@yield('content')

@include('site.layouts.footer')
<!-- Scroll Top Area -->
<a href="#top" class="go-top"><i class="fas fa-angle-up"></i></a>

<!-- <button class="message" data-bs-toggle="modal" data-bs-target="#exampleModal1">
<a data-bs-toggle="tooltip" data-bs-placement="right" title="سجل اهتمامك">
<i class="fa-solid fa-comment-sms"></i>
</a>
</button> -->

<a href="https://wa.me/920033007" target="_blank" class="whatsapp">
<i class="fa-brands fa-whatsapp"></i>
</a>
<!-- aya omar -->
<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
</div> -->

<!-- font awesome JS -->
<script src="{{ asset('assets/front/') }}/assets/js/all.min.js"></script>

<!-- Popper JS -->
<script src="{{ asset('assets/front/') }}/assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/front/') }}/assets/js/bootstrap.min.js"></script>
<!-- Wow JS -->
<script src="{{ asset('assets/front/') }}/assets/js/wow.min.js"></script>
<!-- Way Points JS -->
<script src="{{ asset('assets/front/') }}/assets/js/jquery.waypoints.min.js"></script>
<!-- Counter Up JS -->
<script src="{{ asset('assets/front/') }}/assets/js/jquery.counterup.min.js"></script>
<!-- Owl Carousel JS -->
<script src="{{ asset('assets/front/') }}/assets/js/owl.carousel.min.js"></script>
<!-- Magnific Popup JS -->
<script src="{{ asset('assets/front/') }}/assets/js/magnific-popup.min.js"></script>
<!-- Sticky JS -->
<script src="{{ asset('assets/front/') }}/assets/js/jquery.sticky.js"></script>
<!-- Nice Select JS -->
<script src="{{ asset('assets/front/') }}/assets/js/jquery.nice-select.min.js"></script>
<!-- Progress Bar JS -->
<script src="{{ asset('assets/front/') }}/assets/js/jquery.barfiller.js"></script>
<!-- Main JS -->
<script src="{{ asset('assets/front/') }}/assets/js/main.js"></script>
<!-- splide plugin -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

<!-- slick plugin -->
<script src="{{ asset('assets/front/') }}/assets/js/slick.min.js"></script>
<script src="{{ asset('assets/front/') }}/assets/js/plugin.js"></script>

@toastr_js
@toastr_render

<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

<script>
    $(document).ready(function () {
        $('.dropify').dropify();
    });
</script>



</body>
</html>
