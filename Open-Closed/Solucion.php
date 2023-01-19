<?php 
// el principio de Open-closed se basa en tener un metodo en comun par las clases las cuales pueden ser extendidas pero se van a regir por la interfaz cerrada a modificaciones. Esto hace mas facil la extencion de las clases ya que va a ser mas ordenado y limpio. incluso si hay errores en el codigo va a ser simple poder arreglarlo y no va romper todo el codigo. 
// 

class Consola{
    public function encender(consoleInterface $console){
        $console-> turnOn();
    }
}

class Xbox implements consoleInterface{
    public function turnOn(){

    } 
}
class PlayStation implements consoleInterface {
    public function turnOn(){

    }
}
class NintendoSwitch implements consoleInterface {
    public function turnOn(){

    }
}

interface consoleInterface{
    public function turnOn();
}

?>