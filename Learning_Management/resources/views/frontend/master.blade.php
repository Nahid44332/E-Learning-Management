<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>life improvemente - Home</title>

    <!-- Stylesheets -->
    @include('frontend.include.style')
</head>
<body>

    <!-- Header Start -->
        @include('frontend.include.header')

   <main>
    @yield('contant')
   </main>

    <!-- Footer-Section start -->
  @include('frontend.include.footer') 
  <!-- Footer-Section end -->

    </div>

    <!-- JavaScript Files -->
   @include('frontend.include.script')
</body>

</html>
