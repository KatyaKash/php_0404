<?php
	header('Content-type: text/html; charset=utf-8');
	require_once 'cat.php';
	require_once 'dog.php';
	require_once 'toy.php';

	$toy1 = new Toy('мышкасосиска');

	$pet1 = new Dog('Шион', 'дворняга', $toy1);
	$pet2 = new Cat('Азул', 'морской кот', new Toy('мячик'));

	$pet1->show();
	$pet1->voice();
	$pet1->game();

	$pet2->show();
	$pet2->voice();
	$pet2->game();
?>