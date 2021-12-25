<?php 
session_start();
$login = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['pass']; 
$pass2 = $_POST['pass2'];

if($pass === $pass2){
	require_once('../config.php');

	$check_user = $pdo->prepare("SELECT * FROM `users` WHERE login=?");
	$check_user->execute([$login]);
	$user = $check_user->fetch();

	if(!empty($user)){
		$_SESSION['message'] = 'Такой пользователь уже существует';
		header('Location: ../assets/testreg.php');
	} else {
	    $add_user = $pdo->prepare("INSERT INTO `users`(`login`, `email`, `pass`) VALUES(?, ?, ?)");
	    $add_user->execute([$login, $email, $pass]);
	    header('Location: ../assets/testauth.php');
	}	
} else {
	$_SESSION['message'] = 'Пароли не совпадают';
	header('Location: ../assets/testreg.php');
}

?>