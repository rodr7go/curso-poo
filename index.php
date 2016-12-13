<?php

// class Person {

// 	var $firstName;
// 	var $lastName;

// 	function __construct($firstName, $lastName)
// 	{
// 		$this->firstName = $firstName;
// 		$this->lastName = $lastName;
// 	}

// 	function fullName() {
// 		return $this->firstName . ' ' . $this->lastName;
// 	}
// }

// $person1 = new Person('Rodrigo', 'Lopez');



// $person2 = new Person('Ramon', 'Lapenta');


// echo"{$person1->fullName()} es amigo de {$person2->fullName()}";







//Separando vista de logica

// echo "$fullName es amigo de $fullName2";



// Ejemplo de la primera clase


class Dog
{
	var $tamano, $raza, $color;

	function __construct($tamano, $raza, $color)
	{
		$this->tamano = $tamano;
		$this->raza = $raza;
		$this->color = $color;
	}

	function bark()
	{
		return 'Guau Guau!! Estoy ladrando';
	}

	Function dormir()
	{
		return 'zZzZzZ';
	}

}

$sam = new Dog('Grande', 'Retriever', 'Negro');

echo "Sam es: $sam->tamano <br>";
echo "De raza: $sam->raza <br>";
echo "Y de color: $sam->color <br>";
echo "{$sam->bark()} <br>";
echo "{$sam->dormir()} <br>";