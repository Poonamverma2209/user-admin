<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.pixelstrap.com/bigdeal/admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Apr 2021 07:14:50 GMT -->
@include('admin.head')

<body>

@auth
    @include('admin.header')
@endauth

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->

        @auth
            @include('admin.sidebar')
        @endauth

        @yield('content')
    </div>
    @auth
        @include('admin.footer')
    @endauth

</body>

<!-- Mirrored from themes.pixelstrap.com/bigdeal/admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Apr 2021 07:16:22 GMT -->
</html>

