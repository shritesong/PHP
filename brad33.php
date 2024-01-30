<?php
    class Bike{
        //物件屬性 ->有物件才有的屬性
        protected $speed = 0;

        //建構式
        function __construct()
        {
            $this->speed = 0;
        }

        //物件方法 ->有物件才有的方法
        function upSpeed(){
            $this->speed = $this->speed < 1 ? 1 : $this ->speed*1.4; 
        }
        function downSpeed(){
            $this->speed = $this->speed < 1 ? 0 : $this->speed*0.7;
        }
        function getSpeed(){
            return $this->speed;
        }
    }

    class Scooter extends Bike{
        private $gear;

        function __construct()
        {
            $this->gear = 0;
        }

        function upSpeed(){
            $this->speed = $this->speed < 1 ? 1 : $this ->speed*1.4*$this->gear; 
        }
        function changeGear($gear){
            if($gear >= 0 && $gear <= 4){
                $this->gear = $gear;
            }
        }
    }

    $mybike = new Bike();
    $mybike->upSpeed();$mybike->upSpeed();$mybike->upSpeed();$mybike->upSpeed();
    
    echo $mybike->getSpeed();
?>