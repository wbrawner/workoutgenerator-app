<html>
    <head>
        <title>Workout Generator - @yield('title')</title>
        <link rel="stylesheet" href={{ asset('assets/css/styles.css') }}>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        @section('header')
            <div class="header">
                <div class="container">
                    <div id="logo">
                        <a href="/"><img src={{ asset('assets/images/logo.png') }} alt='Fitness 1440'></a>
                    </div>
                    <div id="nav">
                        <ul>
                            <li><a href="/">Home</a></li> |
                            <!--<a href="/about"><li>About</li></a> |-->
                            <li><a href="/generate">Generate</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id=top-grad></div>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
