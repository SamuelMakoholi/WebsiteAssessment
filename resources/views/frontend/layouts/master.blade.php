<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Welcome</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  

    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
 
    <link rel="stylesheet" href="{{asset('frontend/front/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/front/js/bootstrap.min.js')}}">

    <script src="https://kit.fontawesome.com/ea6f44d172.js" crossorigin="anonymous"></script>
  
    <!-- JavaScript and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</head>

<body>

    @include('frontend.layouts.navbar')

    @yield('content')


    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        $(document).on('click', '#accordion>li>a', function() {
            $(this).siblings('.box').addClass('active');
            $(this).closest('li').siblings('li').find('.box').removeClass('active');
        })
        $('#accordion').on('click', 'li>a', function() {
            $('#accordion li a.active').removeClass('active');
            $(this).addClass('actice');
        })
    </script>

</body>

</html>
