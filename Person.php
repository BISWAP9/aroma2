<?php
class Person{
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother, $father){
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    $this->hp = 100;
  }

  function sayHi($name){
    return "Hi $name, I`m " . $this->name;
  }

  function setHp($hp){
    if ($this->hp + $hp >= 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }

  function getHp(){
    return $this->hp;
  }

  function getName() {
    return $this->name;
  }

  function getMother() {
    return $this->mother;
  }

  function getFather() {
    return $this->father;
  }

  function getInfo() {
    if ($this->getName() === 'Valera'){
			return "<h2>A few words about my family...</h2><br>" . "My name: " . $this->getName() . "<br>Mother: " . $this->getMother()->getName() . "<br>Father: " . $this->getFather()->getName();
		} else if ($this->getName() ==='Olga'){
			return "<br>Maternal grandmother: " . $this->getMother()->getName() . "<br>Maternal grandfather: " . $this->getFather()->getName();
		} else {
			return "<br>Paternal grandmother: " . $this->getMother()->getName() . "<br>Paternal grandfather: " . $this->getFather()->getName();
		}
  }
}
//! Здоровье человека не может быть более 100
$zina = new Person("Zina", "Semenova", 75, "jfjfjf", "jcjcj");
$ivan = new Person("Ivan", "Semenov", 78, "ccjxc", "kcc");
$luda = new Person("Ludmila", "Petrova", 75, "ncmcm", "mcmcm");
$victor = new Person("Victor", "Petrov", 80, "cmc", "mcmcm");
$olga = new Person("Olga", "Petrova", 42, $zina, $ivan);
$igor = new Person("Igor", "Petrov", 44, $luda, $victor);
$valera = new Person("Valera", "Petrov", 15, $olga, $igor);


$family = [$valera, $olga, $igor];
for($i = 0; $i < count($family); $i++){
	echo $family[$i]->getInfo();
};
// $medKit = 50;
// // $alex->hp = $alex->hp - 30;//упал
// $alex->setHp(-30);
// echo $alex->getHp() . "<br>";
// // $alex->hp = $alex->hp + $medKit;
// $alex->setHp($medKit);// нашел аптечку 
// echo $alex->getHp();