<?php
//KELAS
// class Car{
//     public $brand;
//     public function startEgine(){
//         echo "Egine started!";
//     }
// }

// $car1 = new Car();
// $car1 -> brand = "Toyota";

// $car2 = new Car();
// $car2 -> brand = "Honda";

// $car1 -> startEgine();
// echo $car2->brand;

//INHERITANCE
// class animal{
//     protected $name;

//     public function __construct($name){
//         $this -> name = $name;
//     }

//     public function eat(){
//         echo $this -> name . "is eating.<br>";
//     }

//     public function sleep(){
//         echo $this->name." is sleeping.<br>";
//     }
// }

// class cat extends animal{
//     public function meow(){
//         echo $this->name." says meow!<br>";
//     }
// }

// class dog extends animal{
//     public function bark(){
//         echo $this->name." says woof!<br>";
//     }
// }

// $cat = new cat("Whiskers");
// $dog = new dog("Buddy");

// $cat->eat();
// $dog->sleep();

// $cat->meow();
// $dog->bark();

//POLIMORFISME
// interface Shape{
//     public function calculateArea();
// }

// class Circle implements Shape{
//     private $radius;
//     public function __construct($radius)
//     {
//         $this->radius = $radius;
//     }

//     public function calculateArea(){
//         return pi() * $this->radius * $this->radius;
//     }
// }

// class Rectangle implements Shape{
//     private $width;
//     private $height;

//     public function __construct($width, $height){
//         $this->width = $width;
//         $this->height = $height;
//     }

//     public function calculateArea(){
//         return $this->width * $this->height;
//     }
// }

// function printArea(Shape $shape){
//     echo "Area: " . $shape->calculateArea() . "<br>";
// }

// $circle = new Circle(5);
// $rectangle = new Rectangle(4, 6);

// printArea($circle);
// printArea($rectangle);


//ENCAPSULATION
// class Car1{
//     private $model;
//     private $color;

//     public function __construct($model, $color){
//         $this->model = $model;
//         $this->color = $color;
//     }

//     public function getModel(){
//         return $this->model;
//     }

//     public function getColor(){
//         return $this->color;
//     }

//     public function setModel($model){
//         $this->model = $model;
//     }

//     public function setColor($color){
//         $this->color = $color;
//     }
// }

// $carNew = new Car1("Toyota", "Blue");

// echo "Model: " . $carNew->getModel() . "<br>";
// echo "Color: " . $carNew->getColor() . "<br>";

// $carNew->setColor("Red");

// echo "Updated Color: " . $carNew->getColor() . "<br>";

// ABSTRACTION
// abstract class Shape1{
//     abstract public function calculateArea();
// }

// class Circle1 extends Shape1{
//     private $radius;

//     public function __construct($radius){
//         $this->radius = $radius;
//     }    

//     public function calculateArea(){
//         return pi() * $this->radius * $this->radius;
//     }
// }

// class Rectangle1 extends Shape1{
//     private $width;
//     private $height;

//     public function __construct($width, $height){
//         $this->width = $width;
//         $this->height = $height;
//     }

//     public function calculateArea(){
//         return $this->width * $this->height;
//     }
// }

// $circle1 = new Circle1(5);
// $rectangle1 = new Rectangle1(4, 6);

// echo "Area of Circle: " . $circle1->calculateArea() . "<br>";
// echo "Area ofRectangle: " . $rectangle1->calculateArea() . "<br>";

// INTERFACE
// interface Shape2{
//     public function calculateArea();
// }

// interface Color{
//     public function getColor();
// }

// class Circle2 implements Shape2, Color{
//     private $radius;
//     private $color;

//     public function __construct($radius, $color){
//         $this->radius = $radius;
//         $this->color = $color;
//     }

//     public function calculateArea(){        
//         return pi() * $this->radius * $this->radius;
//     }

//     public function getColor(){        
//         return $this->color;
//     }
// }

// $circle2 = new Circle2(5, "Blue");

// echo "Area of Circle: " . $circle2->calculateArea() . "<br>";
// echo "Color of Circle: " . $circle2->getColor() . "<br>";

// CONSTRUKTOR DAN DESTRUKTOR
// class Car2{
//     private $brand;

//     public function __construct($brand){
//         echo "A new car is created.<br>";
//         $this->brand = $brand;
//     }

//     public function getBrand(){
//         return $this->brand;
//     }

//     public function __destruct(){
//         echo "The car is destroyed.<br>";
//     }
// }

// $car2 = new Car2("Toyota");

// echo "Car brand: " . $car2->getBrand(); 

// ENCAPSULATION
class Animal1{
    public $name;
    protected $age;
    private $color;

    public function __construct($name, $age, $color){
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    public function getColor(){
        return $this->color;
    }
}

$animal1 = new Animal1("Dog",3, "Brown");

echo "Name: " . $animal1->getName() . "<br>";
echo "Age: " . $animal1->getAge() . "<br>";
echo "Color: " . $animal1->getColor() . "<br>";
?>