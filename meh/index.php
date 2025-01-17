<?php
	header('Content-type: text/html; charset=utf-8');
	require_once 'student.php';
	require_once 'group.php';
	require_once 'discipline.php';

	function loadStudents($group, $path){
		$file = nl2br(file_get_contents($path));
		$students = explode('<br />', $file);
		foreach ($students as $s) {
			$tmp = explode(';', $s);
			$surname = $tmp[0];
			$name = $tmp[1];
			$patr = $tmp[2];
			new Student($name, $surname, $patr, $group);
		}
	}
	$group1 = new Group(1, 'I-02', 2);
	loadStudents($group1, 'i02.txt');
	

	$d1 = new Discipline(1, 'Основы программирования');
	$d2 = new Discipline(2, 'Web-дизайн');
	$d3 = new Discipline(3, 'Элементы высшей математики');
	$d4 = new Discipline(4, 'Прикладное программное обеспечение');
	$d5 = new Discipline(5, 'Компьютерная графика');

	$group1->addDiscipline($d1);
	$group1->addDiscipline($d2);
	$group1->addDiscipline($d3);
	$group1->addDiscipline($d4);
	$group1->addDiscipline($d5);

	$group1->show();

	$group1->saveToFile('i02_out2.txt');
?>