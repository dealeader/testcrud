<?php

try {
	$pdo = new PDO('mysql:dbname=php_miroshnichenko; host=localhost', 'root', '');
} catch (PDOException $e) {
	die($e->getMessage());
}