<?php
	$objects = [
		'{"name":"Swiftness Boot","description":"Boot that makes you faster","id":0,"price":5,"speed":3}',
		'{"name":"Multiplier","description":"Multiplies your point gain from collecting coins","id":1,"price":4,"multiplier":2}',
		'{"name":"Point Bag","description":"Increases your points","id":2,"price":7,"points":20}'
	];

	if(isset($_GET['index']) && $_GET['index'] < count($objects))
	{
		$index = $_GET['index'];
	}
	else
	{
		$index = 0;
	}

	
	if(isset($_GET['coins']))
	{
		$coins = $_GET['coins'];
	}
	else
	{
		$coins = 0;
	}

	$data = json_decode($objects[$index], true);
	if($data['price'] <= $coins)
	{
		$json = $objects[$index];
	}
	else 
	{
		$json = "Not enough money.";
	}

	echo $json;
?>
