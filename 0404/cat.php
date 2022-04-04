<?php
require_once 'pet.php';

class Cat extends Pet{
	public function voice(){
		echo 'МААУУУУУ<br>';
	}
}
?>