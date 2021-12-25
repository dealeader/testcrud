<?php 
session_start();
$login = $_POST['login'];
$pass = $_POST['pass'];

#$pass = md5($pass."ffdsfsd");

require_once '../config.php';


$get_user = $pdo->prepare("SELECT * FROM `users` WHERE `login` = ? AND `pass` = ?");
$get_user->execute([$login, $pass]);
$user_info = $get_user->fetchAll();

if(count($user_info) !== 0){
	$_SESSION['user'] = ['id' => $user_info[0][0]];
	header('Location: ../crud.php');
} else {
	$_SESSION['message'] = "Логин или пароль введены неверно";
	header('Location: ../index.php');
}

?>
