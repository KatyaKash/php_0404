<?php
class Toy {
	private $name;

	public function __construct($n) {
		$this->name = $n;
	}

	public function display() {
		echo $this->name, '<br>';
	}
}
?>