<!DOCTYPE html>
<html lang="en">

@include('Front.layouts.header')

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="mosh-preloader"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    @include('Front.layouts.nav')
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    @yield('content')

    <!-- ***** CTA Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    @include('Front.layouts.footer')
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery-2.2.4 js -->
    @include('Front.layouts.script')
</body>

</html>
