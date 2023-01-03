<!DOCTYPE html>
<html lang="en">

@include('Front.layouts.header')

<body>
    <!-- ##### Header Area Start ##### -->
    @include('Front.layouts.nav')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    @yield('content')
    <!-- ##### Instagram Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('Front.layouts.footer')
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    @include('Front.layouts.script')
</body>

</html>
