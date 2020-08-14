<!DOCTYPE html>

<html>

    <head>

        <title>@yield('title', 'Control veterinario')</title> <!-- En el primer parametro recibe el titulo, el segundo parametro entrega un valor predeterminado -->
        <!-- En el recuadro style esta definido el color a usar cuando una ruta esta activa -->
         <link rel = "icon" href =  "https://cdn.icon-icons.com/icons2/1448/PNG/512/42491hospital_98958.png" type = "image/x-icon">  

        <style>    

            

            
            @guest
            html, body {
                background-color: #ABF6D1;
                color: #146149;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 2;
                }
                .active a { 
                color: #149c7a; 
                text-decoration: none;
            }
            .inactive a { 
                color: #57bbe0; 
                text-decoration: none;
            }
            .content {
                text-align: center;
            }
                @endguest
            @auth
                @if(Auth::user()->name == 'Veterinario')
                    html, body {
                        background-color: #7FF57B;
                        color: #08891B;
                        font-family: 'Nunito', sans-serif;
                        font-weight: 200;
                        height: 100vh;
                        margin: 2;

                @endif
                @if(Auth::user()->name == 'Secretaria')
                    html, body {
                        background-color: #AF8CC6;
                        color: #6B358E;
                        font-family: 'Nunito', sans-serif;
                        font-weight: 200;
                        height: 100vh;
                        margin: 2;
                        }
                        .active a { 
                        color: #9C06FC; 
                        text-decoration: none;
                        }
                        .inactive a { 
                        color: #4C156F; 
                        text-decoration: none;
                        }
                        .content {
                        text-align: center;
                        }
                @endif

            @endauth


        </style>

    </head>

    <body>

        @include('partials.navindex')

        @yield('content') <!-- Se usa como variable para usar en otras vistas -->

    </body>

</html>


