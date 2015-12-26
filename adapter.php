<?php

interface FavorFee
{
	public function give();
	public function receive();
}

class Friend implements FavorFee
{
	public $receive;
	public $give;

	function __construct($receive, $give)
	{
		$this->receive = $receive;
		$this->give = $give;
	}

	public function receive()
	{
		return $this->receive;
	}

	public function give()
	{
		return $this->give;
	}
}

class RelationsFree
{
	public $happy = 0;
	public $unhappy = 0;
	public $friends = [];

	public function addFriend(Friend $friend)
	{
		$this->friends[] = $friend;
	} 

	public function happyAmount()
	{
		foreach($this->friends as $friend)
		{
			$this->happy += $friend->receive();
		}

		echo "You've reciive " . $this->happy . " dollars.\n";		
	}

	public function uphappyAmount()
	{
		foreach($this->friends as $friend)
		{
			$this->unhappy += $friend->give();
		}

		echo "You've giveout " . $this->unhappy . " dollars.\n";
	}
}

$xiangLian = new Friend(1000, 200);
$relationsFee = new RelationsFree;
$relationsFee->addFriend($xiangLian);
$zhongHua = new Friend(400, 2000);
$relationsFee->addFriend($zhongHua);

$relationsFee->happyAmount();
$relationsFee->uphappyAmount();
?>