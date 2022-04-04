<?php
require_once 'pet.php';

class Dog extends Pet{
	public function voice(){
		echo 'тяв<br>';
	}
}
?>