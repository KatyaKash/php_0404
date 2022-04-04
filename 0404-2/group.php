<?php
class Group {
	private $id;
	private $title;
	private $course;
	private $students = array();
	private $disciplines = array();

	public function __construct($i, $t, $c) {
		$this->id = $i;
		$this->title = $t;
		$this->course = $c;
	}

	public function addStudent($student){
		array_push($this->students, $student);
	}

	public function show(){
		echo '<h1>Группа '.$this->title.'<h1>';
		foreach ($this->students as $s) {
			$s->show();
		}
		foreach ($this->disciplines as $d) {
			$d->show();
		}
	}

	public function getTitle(){
		return $this->title;
	}

	public function addDiscipline($d) {
		array_push($this->disciplines, $d);
	}
	
	public function SaveToFile($p) {
		;
	}
}
?>