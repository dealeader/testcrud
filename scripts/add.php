<?
require_once 'config.php';

session_start();
$user_id = $_SESSION['user']['id'];

$reader_id = @$_POST['reader_id'];
$book_id = @$_POST['book_id'];
$taking_at = @$_POST['taking_at'];


if (isset($_POST['submit'])) {
	$sql = ("INSERT INTO `log_taking`(`reader_id`, `book_id`, `taking_at`) VALUES(?,?,?)");
	$sql2 = ("INSERT INTO `users_actions`(`user_id`, `action_id`) VALUES(?,?)");
	$query = $pdo->prepare($sql);
	$query->execute([$reader_id, $book_id, $taking_at]);
	$action_id = $pdo->query("SELECT max(id) FROM `log_taking`")->fetchColumn(0);
	$query = $pdo->prepare($sql2);
	$query->execute([$user_id, $action_id]);
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}