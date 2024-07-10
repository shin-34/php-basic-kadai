<?php

class Food {
    private $name;
    private $price;

    public function show_price(){
        echo $this->price.'<br>';
    }

    public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
    }
}

class Animal {
    private $name;
    private $height;
    private $weight;

    public function show_height(){
        echo $this->height.'<br>';
    }

    public function __construct(string $name, int $height, int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
}

$Food = new Food('玉ねぎ', 200);
$Animal = new Animal('ライオン', 100, 100);

print_r($Food);
print_r($Animal);
?>