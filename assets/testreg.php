<? session_start();
if (isset($_SESSION['user'])) {
    header('Location: ../crud.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<title>Document</title>
</head>
<body>
	<div class="container mt-4">
	<div class="row">
		<div class="col">
				<h1>Зарегистрироваться</h1>
				<form action="../scripts/reg.php" method="post">
					<input type="text" name="login" class="form-control" id="login" placeholder="Логин"><br>
					<input type="email" name="email" class="form-control" id="email" placeholder="Почта"><br>
					<input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
                    <input type="password" name="pass2" class="form-control" id="pass2" placeholder="Пароль для подтверждения"><br>
					<button class="btn btn-success">Зарегистрироваться</button><br><br>
					<?php 
						if (isset($_SESSION['message'])) {
							echo '<p>' . $_SESSION['message'] . '</p>';
						}
						unset($_SESSION['message']);
					?>
				</form> 
				<a href="testauth.php">Уже зарегистрированы?</a>
			</div>
	</div>
	</div>
</body>
</html>