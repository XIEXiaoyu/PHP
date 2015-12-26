<?php 
class Drummer
{
	public $name;

	function __construct($name)
	{
		$this->name = $name;
	}

	function receive($signal)
	{
		if($signal == 'start')
		{
			echo "{$this->name} starts\n";
		}
		if($signal == 'stop')
		{
			echo "{$this->name} stops\n";
		}
	}
}

class Leader
{
	public $drummers = [];

	public function queue(Drummer $drummer)
	{
		$this->drummers[] = $drummer;
	}
		
	public function start()
	{
		foreach($this->drummers as $drummer)
		{
			$drummer->receive('start');
		}
	}

	public function stop()
	{
		foreach($this->drummers as $drummer)
		{
			$drummer->receive('stop');
		}
	}
}

$bob = new Drummer('Bob');
$john = new Drummer('John');

$leader = new Leader();
$leader->queue($bob);
$leader->queue($john);
$leader->start();
$leader->stop();

?>