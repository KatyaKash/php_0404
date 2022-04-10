<?php
class Discipline {
	private $title;
	private $id;

	public function __construct($i, $t){
		$this->id = $i;
		$this->title = $t;
	}
	/*public function getTitle() {
		return $this->title;
	}*/

	public function show() {
		echo '<br>';
		echo sprintf('%s %s ', $this->id, $this->title);
		echo '<br>';
	}
}
?>