<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ env('APP_NAME') }}</title>
        <link rel="icon" type="image/png" href="{{ url('/images/favicon.png') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{ url('/js/custom.js') }}?{{ time() }}"></script>
        <link rel="stylesheet" href="{{ url('/css/custom.css') }}?{{ time() }}" />
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
                background-size: 50% auto;
                background-position: center bottom;
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
            .parsley-errors-list{
                list-style: none;
                margin-top: 10px;
                margin-bottom: 0;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid" style="padding: 0;">
            <div class="row">
                <div class="col-sm-12 text-center d-inline-block d-sm-none" style="height: 13%; background: #49bf9c;"><a href="{{ url('/') }}"><img src="{{url('/images/logo.png')}}" style="max-width: 200px; margin-top: 20px;"></a></div>
                <div class="col-sm-4 side-bar d-none d-md-block">
                    <div class="nav-side-menu">
                        <br><br>
                        <h2 class="text-center" style="border-bottom: 3px solid #fff; padding: 20px; font-size: 1.5em;">
                            @hasSection('highlight')<a href="{{ url('/') }}" class="" style="padding: .5rem 1rem; border-radius: .3rem; background: #cff6ec; color: #49bf9c;">@endif
                                AUTOATENDIMENTO
                            @hasSection('highlight')</a>@endif
                        </h2>
                        <p class="text-center" style="font-weight: bold; font-size: 16pt;">@yield('highlight')</p>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </body>
</html>
