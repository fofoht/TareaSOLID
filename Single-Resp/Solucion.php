<?php 
// El principio de single-Responsability se basa en que las clases que componen un programa o aplicacion debe solamente ser utilizado para una accion. Por ejemplo una clase de compra debe solamente ser utilizada para ese fin no puede tratar de ser utilizada para conectarse a su cuenta ya que para eso tiene que haber otra clase la cual cumpla esa accion. Esto ayuda a poder tener una interfaz mas limpia y que en caso de modificar o buscar el error del programa esto sea mas digerible y facil de manejar. 

// Cada clase tiene que tener su propio archivo pero para poder entregar la tarea de forma mas compacta todas las clases estan aqui.

class TiendaRolojes{
    protected $relojes=[];

    public function mostrarMenu(){

    }

    public function menuMarcas(){

    }
    public function obtenerRelojes(){

    }


}

class LogIn{
    protected function Username(){

    }
    protected function password(){

    }
}


class Rolex{
    public function modelosRolex(){

    }
    public function personalizarReloj(){

    }
}


class AudemarsPiguet{
    public function modelosAP(){

    }
    public function personalizarReloj(){

    }
}

class RichardMille{
    public function modelosRM(){

    }
    public function personalizarReloj(){

    }
}

class JaegerLeCoultre{
public function modelosJLC(){

}
public function personalizarReloj(){

}
}

class Carrito{

    public function agregarAlCarrito(){

    }
    public function removerDelCarrito(){

    }
    public function pagarCarrito(){

    }
    public function agregarDireccionEnvio(){

    }
}

?>