<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/app.css" />
        
        <title> @yield('tab_title') | Booleana Hotel </title>
    </head>
    <body @yield('parallax')>
             
        @include('partials._header')
        
        <main class="page-cnt">

            <div class="container px-0">
                <div class="row no-gutters">
                    
                    <div class="page-info-cnt col-12 text-center">
                        <h1 class="page-title col-10 mx-auto"> @yield('page-title') </h1>
                        <p class="page-intro col-10 col-sm-8 col-md-5 mx-auto"> @yield('page-intro') </p>
                    </div>
    
                </div>
            </div>
    
            <div class="container px-0">
                <div class="row no-gutters">
                    
                    @yield('page_content')
    
                </div>
            </div>

        </main>

        @include('partials._footer')

    </body>
</html>