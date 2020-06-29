<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oficios - @yield('title')</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>
<style>
    body{
        font-family: 'Noto Serif', serif;
    }
</style>
<body>
    <div id="app" class="d-flex flex-column  justify-content-between">
        <header>
            @include('partials.nav')
        </header>
        <main>
            @yield('content')

        </main>
        
        {{-- <footer class="bg-white text-center text-black-50 py-5 shadow"> --}}
            <!-- Footer -->
    <footer class="border-top page-footer font-small shadow p-3">

            <!-- Footer Elements -->
        <div class="container mt-3">
        
            <!--Grid row-->
            <div class="row grey" style="margin-bottom: -20px;">
        
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">
        
                <!--Image-->
                <div class="view overlay z-depth-1-half text-center">
                    <img src="/svg/logo_subsec.png" class="img-fluid logsubsec"
                    alt="">
                    <a href="">
                    <div class="mask rgba-white-light"></div>
                    </a>
                </div>
        
                </div>
                <!--Grid column-->
        
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">
        
                <!--Image-->
                <div class="view overlay z-depth-1-half text-center">
                    <img src="/svg/logo_industria.png" class="img-fluid"
                    alt="">
                    <a href="">
                    <div class="mask rgba-white-light"></div>
                    </a>
                </div>
        
                </div>
                <!--Grid column-->
        
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">
        
                <!--Image-->
                <div class="view overlay z-depth-1-half text-center">
                    <img src="/svg/logo_gob.png" class="img-fluid logob"
                    alt="">
                    <a href="">
                    <div class="mask rgba-white-light"></div>
                    </a>
                </div>
        
                </div>
                <!--Grid column-->
        
            </div>
            <!--Grid row-->
        
            </div>
            <!-- Footer Elements -->
        
            <!-- Copyright -->
            <div class="footer-copyright text-center">
                {{ config('app.name')}} | {{ date('Y') }}
            </div>
            <!-- Copyright -->

        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    
</body>
</html>