<?php 
 // El principio de liskov se basa en tener clases padres que puedan heredar a las clases hijas y ser modificadas por ellas. Esto permite que no sea necesario que las clases hijas puden utilizar las PADRES sin necesidas de conocer sus diferencias. Gracias a ello puden ser alteradas sin romper el programa y poder arreglar errores de forma mas simple.
class RelojDigital{
public function pasarSegundos(){

    }
    public function pasarMinutos(){

    }
    public function pasarHora(){

    }
    public function WaterProof(){

    }

}


class RelojInteligente{
    public function pasarSegundos(){

    }
    public function pasarMinutos(){

    }
    public function pasarHora(){

    }
    public function mostrarMensaje(){

    }
    public function OcultarMensaje(){

    }
    public function mostrarBateria(){

    }
    public function mostrarClima(){

    }
    public function WaterResistant(){

    }
}


class AppleWatch extends RelojInteligente{
     public function pasarSegundos(){

    }
    public function pasarMinutos(){

    }
    public function pasarHora(){

    }
    public function mostrarMensaje(){

    }
    public function OcultarMensaje(){

    }
    public function mostrarBateria(){

    }
    public function mostrarClima(){

    }
    public function WaterResistant(){

    }

}


class GShock extends RelojDigital{
    public function pasarSegundos(){

    }
    public function pasarMinutos(){

    }
    public function pasarHora(){

    }
    public function WaterProof(){

    }
}
?>