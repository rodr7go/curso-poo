<?php

class Person {

	protected $firstName; // public, protected <-> private
	protected $lastName;
	protected $nickname;
	protected $changedNickname = 0;
	protected $birthday;

	public function __construct($firstName, $lastName, $birthday)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->birthday = $birthday;
	}

	// public function setFirstName($firstName)
	// {
	// 	$this->firstName = $firstName;
	// }

	public function getFirstName()
	{
		return $this->firstName;
	}

	public function getLastName()
	{
		return $this->lastName;
	}

	public function setNickname($nickname)
	{
		// if (! empty ($nickname)){
		// 	$this->nickname = strtolower($nickname);
		// }

		// if ($this->changedNickname < 2){
		// 	throw new Exception("No puedes cambiar el nickname mas de 2 veces");
					
		// }

		if (! strlen($this->nickname) > 2){
			throw new Exception("Tu nickname debe ser mayor a dos caracteres");

		}

		$this->nickname = strtolower($nickname);

		$this->changedNickname++;
	}

	public function getNickname()
	{
		return $this->nickname;
	}

	public function getFullName()
	{
		return $this->firstName . ' ' . $this->lastName;
	}

	public function getAge()
	{
		$date_birthday = explode('/', $this->birthday);
		$date_now = date("Y");
		$age = $date_now - $date_birthday[2];

		return $age;
	}
}

$person1 = new Person('Rodrigo', 'Lopez', '07/11/1990');

// $person2 = new Person('Ramon', 'Lapenta');

// $person1->setFirstName('luis');
// exit($person1->getFirstName());

$person1->setNickname('Rodrigo');
$person1->setNickname('Fozz');
// $person1->setNickname('Ezequiel');

echo $person1->getAge();

	
// echo"{$person1->fullName()} es amigo de {$person2->fullName()}";


// (Un simbolo igual es para asignacion)-> = , (Dos simobolos = es para comparacion)-> ==




// Separando vista de logica

// echo "$fullName es amigo de $fullName2";



// Ejemplo de la primera clase


// class Dog
// {
// 	var $tamano, $raza, $color;

// 	function __construct($tamano, $raza, $color)
// 	{
// 		$this->tamano = $tamano;
// 		$this->raza = $raza;
// 		$this->color = $color;
// 	}

// 	function bark()
// 	{
// 		return 'Guau Guau!! Estoy ladrando';
// 	}

// 	Function dormir()
// 	{
// 		return 'zZzZzZ';
// 	}

// }

// $sam = new Dog('Grande', 'Retriever', 'Negro');

// echo "Sam es: $sam->tamano <br>";
// echo "De raza: $sam->raza <br>";
// echo "Y de color: $sam->color <br>";
// echo "{$sam->bark()} <br>";
// echo "{$sam->dormir()} <br>";