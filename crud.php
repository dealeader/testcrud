<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
} 

include 'scripts/add.php';
include 'scripts/delete.php';
include 'scripts/read.php';
include 'scripts/update.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col mt-1">
				<button class="btn btn-success mb-1" data-toggle="modal" data-target="#Modal"><i class="fa fa-user-plus"></i></button>
				<a style="margin-left: 1025px" href='scripts/logout.php'><i class="fa fa-window-close"></i></a>
				<p><?php print_r($user_actions) ?></p>
				<table class="table shadow ">
					<thead class="thead-dark">
						<tr>
							<th>ID</th>
							<th>Номер читателя</th>
							<th>Номер книги</th>
							<th>Взята</th>
							<th>Возвращена</th>
							<th>Действие</th>
						</tr>
						<?php
						foreach ($result as $value) { ?>
						<tr>
							<td><?=$value['id'] ?></td>
							<td><?=$value['reader_id'] ?></td>
							<td><?=$value['book_id'] ?></td>
							<td><?=$value['taking_at'] ?></td>
							<td><?=$value['returned_at'] ?></td>
							<td>
								<?php 
								    if (!is_null($user_actions) & in_array($value['id'], $user_actions)) {
										require 'assets/update.php';	
										require 'assets/delete.php';
								    }
								 ?>
								<a href="?edit=<?=$value['id'] ?>" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModal<?=$value['id'] ?>"><i class="fa fa-edit"></i></a> 
								<a href="?delete=<?=$value['id'] ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?=$value['id'] ?>"><i class="fa fa-trash"></i></a>
							</td>
						</tr> <?php } ?>
					</thead>
				</table>
			</div>
		</div>
	</div>
	

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>