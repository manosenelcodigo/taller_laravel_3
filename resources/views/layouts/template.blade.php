<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>@yield('title','Título de la página por defecto para todas') </title>
        </head>
        <body>
             <!--menú-->
             @section('menu')
                <h1>título para todas las páginas </h1>
                <hr />
             @show
             <!--/menú-->
            <!--contenido de la vista-->
                    @yield('content')
            <!--/contenido de la vista-->
            
        </body>
    </html>