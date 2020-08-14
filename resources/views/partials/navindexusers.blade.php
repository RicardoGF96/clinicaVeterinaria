<nav>

    <ul>

        <li class="{{ setActive('home') }}"><a href="/">Pagina de inicio</a></li> <!-- Botones listados para la navegación -->
        <li class="{{ setActive('appointment') }}"><a href="/appointment">Pide tu hora</a></li>
        <li class="{{ setActive('admission') }}"><a href="/admission">Ingresos</a></li> <!-- Se hace llamado de la funcion del helper.php en la carpeta app -->
        <li class="{{ setActive('contact') }}"><a href="/contact">Contactanos</a></li>
        <li class="{{ setActive('about') }}"><a href="/about">Acerca de nosotros</a></li>
    </ul>

</nav>