<?
include 'config.php';
session_start();
$user_id = $_SESSION['user']['id'];

$edit_reader_id = @$_POST['edit_reader_id'];
$edit_book_id = @$_POST['edit_book_id'];
$edit_returned_at = @$_POST['edit_returned_at'];
$get_id = @$_GET['id'];

$user_actions = $pdo->query("SELECT action_id FROM `users_actions` WHERE user_id=$user_id")->fetchAll(PDO::FETCH_COLUMN, 0);

if (isset($_POST['edit-submit'])) {
	$sql = "UPDATE log_taking SET reader_id=?, book_id=?, returned_at=? WHERE id=?";
	$querys = $pdo->prepare($sql);
	$querys->execute([$edit_reader_id, $edit_book_id, $edit_returned_at, $get_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}