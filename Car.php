<?php

class Car {
    private int $id;
    private string $brand;
    private string $model;
    private int $horsePower;
    private string $image;


    public function __construct(int $id, string $brand, string $model, int $horsePower, string $image)
    {
        $this->id = $id;
        $this->brand = $brand;
        $this->model = $model;
        $this->horsePower = $horsePower;
        $this->image = $image;

    }

    public function getId():int{
        return $this -> id;
    }
    public function getBrand():string{
        return $this -> brand;
    }
    public function getModel():string{
        return $this -> model;
    }
    public function getHorsePower():int{
        return $this -> horsePower;
    }
    public function getImage():string{
        return $this -> image;
    }

    public function setBrand(string $brand):void{
        $this -> brand = $brand;
    }
    public function setModel(string $model):void{
        $this -> model = $model;

    }
    public function setHorsePower(string $horsePower):void{
        $this -> horsePower = $horsePower;
    }
    public function setImage(string $image):void{
        $this -> image = $image;
    }


}

