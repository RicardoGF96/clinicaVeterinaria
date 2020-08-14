<nav>

    <ul>
    	@guest
    	<li class="{{ setActive('home1') }}"><a href="/">Pagina de inicio</a></li> <!-- Botones listados para la navegación -->
        <li class="{{ setActive('appointment') }}"><a href="/appointment">Agendar tu hora</a></li>
        <li class="{{ setActive('contact') }}"><a href="/contact">Contactanos</a></li>
        <li class="{{ setActive('about') }}"><a href="/about">Acerca de nosotros</a></li>
    	@endguest
    	@auth
        @if(Auth::user()->name == 'Veterinario')
          <li class="{{ setActive('home1') }}"><a href="/">Pagina de inicio</a></li> <!-- Botones listados para la navegación -->
           <li class="{{ setActive('appointment') }}"><a href="/appointment">Gestionar Horas</a></li>
          <li class="{{ setActive('admission') }}"><a href="/admission">Ingresos</a></li> <!-- Se hace llamado de la funcion del helper.php en la carpeta app -->
        @endif
    	   @if(Auth::user()->name == 'Secretaria')
          <li class="{{ setActive('home1') }}"><a href="/">Pagina de inicio</a></li> <!-- Botones listados para la navegación -->
           <li class="{{ setActive('appointment') }}"><a href="/appointment">Gestionar Horas</a></li>
        @endif
    	@endauth
        
   		 @guest   
   		    <li class="{{ setActive('login') }}"><a href="{{ route('login') }}">login</a></li>
   		  @else
   		  	<li>
   		  		<a href="#" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"
                  >Cerrar Sesion	
   		  		</a>
   		  	</li>
   		 @endguest
    </ul>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>