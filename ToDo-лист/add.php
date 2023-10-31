<?php 

	//Переменные
	$title = $_POST['title'];

	//Подключение к базе данных
	require 'db.php';

    $sql = 'INSERT INTO list(title) VALUES(:title)';

	$query = $pdo->prepare($sql);
  
	$query->execute(['title' => $title]);

	header('Location: index.php');

?>