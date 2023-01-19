<?php   
// El principio de Interface-Segregation se basa sobre hacer interfaces mas especificas. Las clases pueden utilizar multiples  interfaces de ser necesario.


interface ReptilRastrero{
    public function comer();
public function carnivoro();
public function serpentear();
}

interface ReptilCuadrupedo{
public function comer();
public function carnivoro();
public function correr();

}


interface ReptilAcuatico{
public function nadar();

}

class Cocodrilo implements ReptilAcuatico, ReptilCuadrupedo{
    public function comer(){}
public function carnivoro(){}
public function correr(){}
public function nadar(){}
}

class Serpiente implements ReptilRastrero{
    public function comer(){}
public function carnivoro(){}
public function serpentear(){}
}
?>