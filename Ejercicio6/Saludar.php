<?php

class Saludar{

    private $nombre;
    private $apellido;

    public function __construct($nombre, $apellido){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    private function saludoFormal($horario){
        if($horario > 5 && $horario < 13){
            return "¡Buenos días";
        }else if($horario > 13 && $horario < 21){
            return "¡Buenas tardes";
        }else{
            return "¡Buenas noches";
        }
    }

    private function saludoInformal($horario){
        if($horario > 5 && $horario < 13){
            return "¡Hola! " . "¡Que tengas un buen día";
        }else if($horario > 13 && $horario < 21){
            return "¡Hola! " . "¡Que tengas una buena tarde";
        }else{
            return "¡Hola! " . "¡Que tengas buenas noches";
        }
    }

    public function saludarFormalmente($horario){
        return $this->saludoFormal($horario) . " " . $this->nombre . " " . $this->apellido . "!" ;
    }

    public function saludarInformalmente($horario){
        return $this->saludoInformal($horario) . " " . $this->nombre . " " . $this->apellido . "!" ;
    }

}