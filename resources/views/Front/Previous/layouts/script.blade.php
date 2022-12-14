<a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="{{ asset('material/js/core/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('Front/lib/easing/easing.min.js')}}"></script>
<script src="{{ asset('Front/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{ asset('Front/js/aos.js')}}"></script>
<script src="{{ asset('Front/js/owl.carousel.min.js')}}"></script>



{{-- <script src="{{ asset('Front/lib/owlcarousel/owl.carousel.min.js')}}"></script> --}}

<!-- Template Javascript -->
<script src="{{ asset('Front/js/main.js')}}"></script>
<script src="{{ asset('Front/js/main2.js')}}"></script>


{{-- <script src="{{ asset('Front/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{ asset('Front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('Front/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{ asset('Front/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{ asset('Front/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('Front/assets/js/main.js')}}"></script> --}}
@stack('js')
<script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>


@yield('script')
