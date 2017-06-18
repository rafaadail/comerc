<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Teste Comerc</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Personal CSS -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body onload="startTime()">
        <div class="container">
            <div class="row" style="padding-bottom: 95px">
                <div role="main" class="col-md-7 col-lg-7 col-sm-7">
                    @yield('content')
                </div>
                <aside role="complementary" class="col-md-5 col-lg-5 col-sm-5 text-right" style="margin-top: 20px">
                    <p>
                    <div id="cont_9f229e674d7eb2e254610160406172a3"><script type="text/javascript" async src="https://www.tempo.com/wid_loader/9f229e674d7eb2e254610160406172a3"></script></div>
                    </p>
                </aside>
            </div>
            <footer class="row">
                @include('footer')
            </footer>
        </div>

        <!-- jQuery -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

        <!-- Personal JavaScript -->
        <script src="{{ asset('assets/js/comerc.js') }}"></script>
    </body>
</html>