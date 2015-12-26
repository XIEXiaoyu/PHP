<?php 

class LoseWeight
{
	public $name;

	function __construct($name)
	{
		$this->name = $name;
	}
	// 1.somebody wants to lose weight
	public function lose()
	{
		echo "first, {$this->name} wants to lose weight ";

		$this->speed();

		echo "second, he must walk on foot and have less food.\n";

		$this->takeSports();

		echo "lastly, he need to have enough sleep.\n\n";
	}

	function takeSports()	
	{
		echo "This varies from people to people.";
	}

	function speed()
	{
		echo "quick or slow";
	}
}

class QuickLoseWeight extends LoseWeight
{
	public function takeSports()
	{
		echo "runs 8 kilometers a day.\n";
	}

	public function speed()
	{
		echo "quickly.\n";
	}

}

$zhiYan = new QuickLoseWeight('Duan Zhiyan');
$zhiYan->lose();

class SlowLoseWeight extends LoseWeight
{
	public function takeSports()
	{
		echo "run 3 kilometers every two days.\n";
	}

	public function speed()
	{
		echo "slowly.\n";
	}
}

$xieJun = new SlowLoseWeight('Xie Jun');
$xieJun->lose();
?>