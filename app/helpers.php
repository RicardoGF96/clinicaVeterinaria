<?php

function setActive($routeName){ //Esta funcion ayuda a verificar si la ruta en la que nos encontramos está activa

    return request()->routeIs($routeName) ? 'active' : 'inactive'; 

}