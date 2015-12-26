<?php 

abstract class Creature
{
	protected $live;

	function __construct($live)
	{
		$this->live = $live;
	}

	abstract function isLive();
} 

class Human extends Creature
{
	protected $gender;
	protected $age;

	function __construct($gender, $age)
	{
		parent::__construct(true);
		$this->gender = $gender;
		$this->age = $age;
	}

	public function isLive()
	{
		return $this->live;
	}

	public function getGender()
	{
		return $this->gender;
	}

	public function getAge()
	{
		return $this->age;
	}	
}

$human = new Human('femail', 25);

echo $human->isLive();

?>