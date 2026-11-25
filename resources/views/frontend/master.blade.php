<!-- LAYOUT TOP START-->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title> NayeemArchLab -- @yield('title') </title>

    <!-- Favicon Icon -->
{{--    <link rel="shortcut icon" href={{asset('/')}}frontend/assets/images/logos/fNayeemArchLab.png" type="image/x-icon">--}}

    <link rel="icon" type="image/png" sizes="20x20" href="{{asset('/')}}backend/assets/images/NayeemArchLab.png">

    @include('frontend.includes.style')

</head>
<body>


{{--     Preloader--}}

{{--<div class="preloader">--}}
{{--    <div class="custom-loader"></div>--}}
{{--</div>--}}



@include('frontend.includes.header')

@yield('body')

@include('frontend.includes.footer')
@include('frontend.includes.script')


</body>
</html>
