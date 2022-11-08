<?php 

try {

	$pdo = new PDO('mysql:host=localhost;dbname=site', 'root', 'root');
	
} catch (PDOException $e) {
	echo 'Ошибка соединения' . $e->getMessage();
}