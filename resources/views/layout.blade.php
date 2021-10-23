<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ env('APP_NAME') }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            html, body {
                height: 100%;
                overflow: auto;
            }
            body {
                overflow-x: hidden;
            }
            .side-bar{
                background: #49bf9c;
                color: #fff;
            }
            .nav-side-menu {
                overflow: hidden;
                height: 100%;

                background: url('{{ url('/images/logo-bw.png') }}') no-repeat;
                background-position: bottom 50px center;
            }
            .side-bar, .row, .container-fluid{
                height: 100%;
            }
            .btn-success {
                color: #fff;
                background-color: #49bf9c;
                border-color: #49bf9c;
            }
            .btn-success:hover {
                color: #fff;
                background-color: #316e5c;
                border-color: #316e5c;
            }
            .btn-menu-revert-colors {
                color: #49bf9c;
                background-color: #cff6ec;
                border-color: #cff6ec;
            }
            .btn-menu-revert-colors:hover {
                color: #fff;
                background-color: #49bf9c;
                border-color: #49bf9c;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid" style="padding: 0;">
            <div class="row">
                <div class="col-sm-12 text-center d-inline-block d-sm-none h-25"><img src="{{url('/images/logo.gif')}}"></div>
                <div class="col-sm-4 side-bar d-none d-md-block">
                    <div class="nav-side-menu">
                        <br><br>
                        <h1 class="text-center" style="border-bottom: 3px solid #fff; padding: 20px;">
                            @hasSection('highlight')<span class="" style="padding: .5rem 1rem; border-radius: .3rem; background: #cff6ec; color: #49bf9c;">@endif
                                SERVIÇOS
                            @hasSection('highlight')</span>@endif
                        </h1>
                        <p class="text-center" style="font-weight: bold; font-size: 16pt;">@yield('highlight')</p>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </body>
</html>
