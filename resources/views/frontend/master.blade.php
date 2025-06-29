<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from lifeimprovemente.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Mar 2025 09:23:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>life improvemente - Home</title>

   @include('frontend/include/style')
</head>

<body>
            <!-- Header Start -->
    <header>
 @include('frontend.include.header')
        </header>       
    <main>
       @yield('content')
    </main>

        <!-- Footer-Section start -->
<footer>
     @include('frontend.include.footer')
</footer>        <!-- Footer-Section end -->


    </div>
    <!-- Page-wrapper-End -->

   @include('frontend.include.script')

</body>


<!-- Mirrored from lifeimprovemente.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Mar 2025 09:23:38 GMT -->
</html>