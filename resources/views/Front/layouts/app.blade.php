<!-- @format -->

<!DOCTYPE html>
<html lang="en">
@include('Front.layouts.header')

<body>
    <!-- Topbar Start -->
    {{-- @include('Front.layouts.top') --}}
    <!-- Topbar End -->

    <!-- Navbar Start -->
    @include('Front.layouts.newnav')
    <!-- Navbar End -->

    @yield('content')



    <!-- Footer Start -->
    @include('Front.layouts.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    @include('Front.layouts.script')
</body>
</html>
