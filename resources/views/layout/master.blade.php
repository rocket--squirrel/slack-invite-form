<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Welcome @yield('title')</title>
        <link rel="stylesheet" href="<?php echo app('url')->asset('css/style.css') ?>">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php echo app('url')->asset('js/script.js') ?>"></script>
    </head>
    <body class="container">
        <div class="row">
            <div class="col-md-12">
                @section('body')
                @show
            </div>
        </div>
    </body>
</html>
