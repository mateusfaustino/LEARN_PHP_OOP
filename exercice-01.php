//Crie uma classe Pessoa com o os atributos nome e idade e o método falar<br>

<?php

    class People{
        public $name;
        public $age;
        public function talk (){
            echo $this->name." tem ".$this->age." anos ";
        }
    }

    $people = new People();
    $people->name="Sergio";
    $people->age=16;
    $people->talk();
    