<?php
interface watch{
    public function msg();
    public function start();
    public function starting();
    public function shutdown();
    public function time();
}
class mehanicalwatch{
    private $clockface, $arrows, $mechanism;
    function __construct($clockface, $arrows, $mechanism){
        $this-> clockface - $clockface;
        $this-> arrows - $arrows;
        $this-> mechanism - $mechanism;
    }
    
    function __destruct(){
        echo "<br><h1><strong>Объект Уничтожен</strong></h1></br>";
    }

    public function start(){
        return "{$this-> mechanism}<br>" . "Механизм заведён = {$this->msg()}";
    }

    public function msg(){
        if($this->starting){
            return "да";
        }else{
            return "нет";
        }
    }

    public function starting(){
        $this-> starting = true;
        echo "Заведён<br>";
    }

    public function shutdown(){
        $this-> starting = false;
        echo "Отключён<br>";
    }

    public function time(){
        if($this-> starting){
            $this->time = true;
            echo "Показывает время";
        }
    }
}