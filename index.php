<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php
	class User //создаем описание объекта User 
	{
		private $name; // доступ только изнутри класса для переменной name
		private $age; // доступ только изнутри класса для переменной age

		public function getName() // публичный доступ, возращает имя элемента
		{
			return $this->age; // возращаем значение age, для этого обращаемся к переменной age с помощью переменной this 
		}

		public function setName($name) // публичный доступ, возращает имя элемента
		{
			$this->name = $name;
		}

		public function getAge() // публичный доступ, возращает имя элемента
		{
			return $this->age;
		}

		public function setAge($age) // публичный доступ, возращает имя элемента
		{
			$this->age = $age;
		}

	}

	class Worker extends User // наследует свойства класса User
	{
		private $salary; // доступ только изнутри класса для переменной name

		public function getSalary() 
		{
			return $this->salary;
		}

		public function setSalary($salary)
		{
			$this->salary = $salary;
		}

	}

	$worker = new Worker(); //новый метод 
	$worker->setSalary(1000); //новый метод 
	$worker->setName('Коля'); //метод родителя User
	$worker->setAge(25); //метод родителя User

	echo $worker->getSalary(); //новый метод 
	echo $worker->getName(); //метод родителя User
	echo $worker->getAge(); //метод родителя User


?>

</body>
</html